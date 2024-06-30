<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan ini
use App\Models\Destinasi;
use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    public function tambahUser()
    {
        $kategori = Kategori::get();

        return view('admin.tambah_pengguna', compact('kategori'));
    }

    public function tambahUserAction(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'user_type' => 'required|integer|in:1,2,3',
            ]);

            $user = new User([
                'username' => $request->username,
                'email' => $request->email,
                'full_name' => $request->full_name,
                'password' => Hash::make($request->password),
                'user_type' => $request->user_type,
            ]);

            $user->save();

            if ($user->user_type == 2) {
                $this->tambahDestinasi($request, $user->id_user);
            }

            return redirect()->route('admin.detail_pengguna', $user->id_user);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    private function tambahDestinasi(Request $request, $id_user)
    {
        try {
            $request->validate([
                'images' => 'nullable|array|min:3|max:3',
                'images.*' => 'image|mimes:jpeg,jpg,png|max:2048',
                'id_kategori' => 'required|integer',
                'nama_destinasi' => 'required|string|max:255',
                'lokasi' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'harga' => 'required|integer'
            ]);

            $data = Destinasi::create([
                'id_user' => $id_user,
                'id_kategori' => $request->id_kategori,
                'nama_destinasi' => $request->nama_destinasi,
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'jam_buka' => $request->jam_buka,
                'jam_tutup' => $request->jam_tutup,
                'status' => $request->status
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file_gambar) {
                    $gambar = new Gambar;
                    $path = $file_gambar->store('images', 'public');
                    $gambar->url_gambar = $path;
                    $gambar->id_destinasi = $data->id_destinasi;
                    $gambar->save();
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
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

        if ($user->user_type == 'penjual') {
            $destinasi = Destinasi::where('id_user', $user->id_user)->firstOrFail();

            return view('admin.detail_pengguna', compact('user', 'destinasi'));
        }

        return view('admin.detail_pengguna', compact('user'));
    }

    public function update(Request $request, $id_user)
    {
        try {
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
