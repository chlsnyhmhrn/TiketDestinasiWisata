<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RiwayatPembelianController extends Controller
{
    public function index($id_user)
    {
        $tiket = Tiket::where('id_user', $id_user)->orderBy('tanggal_pesanan', 'desc')->get();
        $kategori = Kategori::all();

        return view('pembeli.riwayat_pembelian', compact('tiket', 'kategori'));
    }

    public function batalkanPesanan(Request $request, $id_tiket)
    {
        $tiket = Tiket::where('id_tiket', $id_tiket)->first();

        $tiket->update([
            'status' => $request->status,
        ]);

        Session::flash('batalkan_pesanan', 'Pembatalan tiket wisata berhasil.');
        return redirect()->route('riwayatPembelian', $tiket->id_user);
    }
}
