<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class DetailDestinasiController extends Controller
{
    public function index($id_destinasi)
    {
        $destinasi = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();

        return view('penjual.detail_destinasi', compact('destinasi'));
    }

    public function editDetail(Request $request ,$id_destinasi){
        $destinasi = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();

        $destinasi->update([
            'id_kategori' => $request->input('id_kategori'),
            'nama_destinasi'=> $request->input('nama_destinasi'),
            'lokasi'=> $request->input('lokasi'),
            'deskripsi'=> $request->input('deskripsi'),
            'harta'=> $request->input('harga'),
            'jam_buka'=> $request->input('jam_buka'),
            'jam_tutup'=> $request->input('jam_tutup')
        ]);
        
        
    }
}
