<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditDataDiriController extends Controller
{
    public function index($id_user)
    {
        $data = User::findOrFail($id_user);
        $kategori = Kategori::all();

        return view('pembeli.edit_data', compact('data', 'kategori'));
    }

    public function update(Request $request, $id_user)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $id_user . ',id_user',
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id_user . ',id_user',
        ]);

        $data = User::findOrFail($id_user);

        $data->update([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email,
        ]);

        return redirect("/user/$id_user")->with('success', 'Profile berhasil diperbarui');
    }
}
