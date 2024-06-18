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
}
