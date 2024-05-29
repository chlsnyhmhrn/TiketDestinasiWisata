<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Destinasi;
use App\Models\Gambar;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.masuk');
    }

    public function registrasiPenjual()
    {
        return view('auth.register_penjual');
    }

    public function inputDestinasi()
    {
        return view('auth.input_destinasi');
    }

    public function registrasiPembeli()
    {
        return view('auth.register_pembeli');
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data) && Auth::user()->user_type == 'pembeli') 
        {
            return redirect('/');
        } else if(Auth::Attempt($data) && Auth::user()->user_type == 'penjual')
        {
            return redirect('/penjual/dashboard');
        } else if(Auth::Attempt($data) && Auth::user()->user_type == 'admin')
        {
            return redirect('/admin/dashboard');
        } else
        {
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/login');
        }
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

        if ($user->user_type == 2) {
            Auth::login($user);
            return redirect('input_destinasi',);
        }
        else{
            Session::flash('success', 'Register Berhasil. Silahkan login.');
            return redirect('login');
        }
    }

    public function inputDestinasiAction(Request $request) 
    {
        $this->validate($request, [
            'images' => 'images|mimes:jpeg,jpg,png|max:2048'
        ]);

        $id_user = Auth::user()->id_user;

        $data = Destinasi::create([
            'id_user' => $id_user,
            'id_kategori' => $request->id_kategori,
            'nama_destinasi' => $request->nama_destinasi,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jam_buka' => $request->jam_buka,
            'jam_tutup' => $request->jam_tutup,
        ]);

        foreach ($request->file('images') as $file_gambar) {
            $gambar = new Gambar;
            $path = $file_gambar->store('images', 'public');
            $gambar->url_gambar = $path;
            $gambar->id_destinasi = $data->id_destinasi;
            $gambar->save();
          }

        Session::flash('success', 'Register Berhasil. Silahkan login!');
        return redirect('login');
    }

    public function kategori() {
        $kategori = Kategori::get();
        
        return view('auth.input_destinasi', compact('kategori'));
    }

    public function actionLogout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/')->with('logout','Logout berhasil.');
    }
}
