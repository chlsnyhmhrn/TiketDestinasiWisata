<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.masuk');
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data) && Auth::user()->user_type == 'pembeli') {
            return redirect('/');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/masuk');
        }
    }

    public function registrasiPenjual()
    {
        return view('auth.register_penjual');
    }

    public function registrasiPembeli()
    {
        return view('auth.register_pembeli');
    }

    public function actionRegister(Request $request)
    {
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'full_name' => $request->full_name,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
        ]);

        Session::flash('message', 'Register Berhasil. Silahkan login.');
        return redirect('masuk');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('masuk');
    }
}
