<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'Mamank',
        //     'pekerjaan' => 'Industri',
        // ];
        // return view('home')->with($data);

        $nama = "Gojou";
        $pekerjaan = "Dukun";
        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
