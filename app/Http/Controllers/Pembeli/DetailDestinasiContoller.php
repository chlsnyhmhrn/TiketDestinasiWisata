<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DetailDestinasiContoller extends Controller
{
    public function index()
    {
        return view('pembeli.detail_destinasi');
    }

    public function detailDestinasi($id){
        $data = Destinasi::where('id_destinasi', $id)->firstOrFail();
        $kategori = Kategori::all();

        return view('pembeli.detail_destinasi', compact('data', 'kategori'));
    }
}
