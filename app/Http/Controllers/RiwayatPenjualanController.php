<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPenjualanController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan riwayat transaksi
        // Misalnya:
        return view('riwayatPenjualan');
    }
}
