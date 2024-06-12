<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index($id_kategori){
        $destinasi = Destinasi::where('id_kategori', $id_kategori)->get();
        $kat = Kategori::where('id_kategori', $id_kategori)->first();
        $kategori = Kategori::all();

        return view('pembeli.kategori', compact('destinasi','kategori','kat'));
    }
}
