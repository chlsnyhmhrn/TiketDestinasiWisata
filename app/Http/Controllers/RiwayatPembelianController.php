<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatPembelianController extends Controller
{
    public function index()
    {
        return view('riwayat_pembelian');
    }
}
