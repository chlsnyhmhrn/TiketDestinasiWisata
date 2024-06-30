<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Tiket;
use Illuminate\Http\Request;

class RiwayatPesananController extends Controller
{
    public function index(Request $request, $id_destinasi)
    {
        $destinasi = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();

        $query = Tiket::where('id_destinasi', $id_destinasi)
            ->where('status', '!=', 'Diproses')
            ->join('users', 'tbl_tiket.id_user', '=', 'users.id_user');

        if ($request->has('search') && $request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('tbl_tiket.code_tiket', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('users.full_name', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($request->has('status') && $request->status != '') {
            $query->where('tbl_tiket.status', $request->status);
        }

        $tiket = $query->orderByDesc('tanggal_pesanan')->get(['tbl_tiket.*', 'users.full_name']);

        return view('penjual.riwayat_pesanan', compact('tiket', 'destinasi'));
    }

    public function invoice($id_tiket)
    {
        $tiket = Tiket::where('id_tiket', $id_tiket)->first();
        $destinasi = Destinasi::where('id_destinasi', $tiket->id_destinasi)->firstOrFail();

        return view('penjual.invoice', compact('tiket', 'destinasi'));
    }
}
