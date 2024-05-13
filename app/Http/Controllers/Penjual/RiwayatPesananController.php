<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;

class RiwayatPesananController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan riwayat transaksi
        // Misalnya:
        return view('penjual.riwayat_pesanan');
    }
}
