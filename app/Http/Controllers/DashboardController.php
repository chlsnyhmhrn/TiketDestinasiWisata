<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
       return view('dashboard', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
