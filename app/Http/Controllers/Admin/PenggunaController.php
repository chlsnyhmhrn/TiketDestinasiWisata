<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan ini
use App\Models\Destinasi;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class PenggunaController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'full_name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'user_type' => 'required|integer',
            'created_at' => 'required|date'
        ]);

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'full_name' => $request->full_name,
            'password' => Hash::make($request->password),
            'role' => $request->user_type,
            'created_at' => $request->created_at,
        ]);

        $user->save();
        return redirect()->route('listPengguna');
    }

    public function list(Request $request)
    {
        $query = User::query();

        if ($request->has('cari_user') && $request->cari_user != '') {
            $query->where('username', 'like', '%' . $request->cari_user . '%')
            ->orWhere('email', 'like', '%' . $request->cari_user . '%');
        }

        if ($request->has('user_type') && $request->user_type != '') {
            $query->where('user_type', '=', $request->user_type);
        }

        $user = $query->get();

        return view('admin.list_pengguna', compact('user'));
    }

    public function detail($id_user)
    {
        $user = User::where('id_user', $id_user)->firstOrFail();

        if($user->user_type == 'penjual'){
            $destinasi = Destinasi::where('id_user', $user->id_user)->firstOrFail();        
            
            return view('admin.detail_pengguna', compact('user', 'destinasi'));
        }

        return view('admin.detail_pengguna', compact('user'));
    }

    public function update(Request $request, $id_user)
    {
        try{
            $request->validate([
                'username' => 'required|string|max:255|unique:users,username,' . $id_user . ',id_user',
                //'full_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id_user . ',id_user',
            ]);
    
            $data = User::findOrFail($id_user);
    
            $data->update([
                'username' => $request->username,
                'full_name' => $request->full_name,
                'email' => $request->email,
            ]);
    
            return redirect()->route('admin.detail_pengguna', $data->id_user)->with('success', 'Akun pengguna berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
