<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'Doraemon',
        //     'pekerjaan' => 'Developer',
        // ];
        // return view('destinasi')->with($data);

        $nama = "Nobita";
        $pekerjaan = "Student";
        return view('destinasi', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
