<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatTransaksiController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan riwayat transaksi
        // Misalnya:
        return view('riwayat_transaksi');
    }
}
