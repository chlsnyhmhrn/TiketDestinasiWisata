<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
       // $data = [
        //    'nama' => 'Doraemon',
          //  'pekerjaan' => 'Developer',
       // ];
       // return view('login')->with($data);
    
       $nama = "Nobita";
       $pekerjaan = "Student";
       return view('login', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
