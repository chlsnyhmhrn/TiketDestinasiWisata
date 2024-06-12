<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index($id_tiket){
        $tiket = Tiket::where('id_tiket' ,$id_tiket)->first();
        $kategori = Kategori::all();
        
        return view('pembeli.invoice', compact('tiket', 'kategori'));
    }
}
