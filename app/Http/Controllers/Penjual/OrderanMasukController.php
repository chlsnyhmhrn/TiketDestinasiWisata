<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderanMasukController extends Controller
{
    public function index($id_destinasi)
    {
        $destinasi = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();
        $tiket = Tiket::where('id_destinasi', $id_destinasi)->where('status', '=', 'Diproses')->orderByDesc('tanggal_pesanan')->get();

        return view('penjual.orderan_masuk', compact('tiket', 'destinasi'));
    }

    public function batalkanPesanan($id_tiket)
    {
        $tiket = Tiket::where('id_tiket', $id_tiket)->first();

        $tiket->update([
            'status' => 2,
        ]);

        Session::flash('batalkan_pesanan', 'Pembatalan tiket wisata berhasil.');
        return redirect()->route('penjual.orderan_masuk', $tiket->id_destinasi);
    }

    public function setujuiPesanan($id_tiket)
    {
        $tiket = Tiket::where('id_tiket', $id_tiket)->first();

        $tiket->update([
            'status' => 3,
        ]);

        Session::flash('setujui_pesanan', 'Tiket wisata berhasil disetujui');
        return redirect()->route('penjual.orderan_masuk', $tiket->id_destinasi);
    }
}
