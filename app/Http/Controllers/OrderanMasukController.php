<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderanMasukController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan orderan masuk
        // Misalnya:
        return view('orderan_masuk');
    }
}