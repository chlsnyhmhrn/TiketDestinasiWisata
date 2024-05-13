<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrderanMasukController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan orderan masuk
        // Misalnya:
        return view('penjual.orderan_masuk');
    }
}