<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarLokasiController extends Controller
{
    public function index()
    {
       // $data = [
       //     'nama' => 'Doraemon',
       //     'pekerjaan' => 'Developer',
       // ];
    
       // return view('home')->with($data);
    $nama = "Nobita";
    $pekerjaan = "Student";
    return view('daftarLokasi', compact('nama','pekerjaan'));
 }
 public function contact(){
    return view('contact');
 }
}
