<?php

namespace App\Http\Controllers\Admin;

use App\Models\AkunUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Tambahkan ini
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ListUserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'full_name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'user_type' => 'required|integer',
            'created_at' =>'required|date'
        ]);

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'full_name' => $request->full_name,
            'password' => Hash::make($request->password),
            'role' => $request->user_type,
            'created_at' =>$request->created_at,
        ]);

        $user->save();
        return redirect()->route('listPengguna');
    }

    public function list()
    {
        $users = User::all();
        return view('admin/list_pengguna', compact('users'));
    }
}
