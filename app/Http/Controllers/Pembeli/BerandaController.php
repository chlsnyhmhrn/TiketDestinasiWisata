<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Destinasi;
use App\Models\Kategori;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if (empty($search)) {
            $data = Destinasi::all();
        } else {
            $data = Destinasi::where('nama_destinasi', 'like', "%$search%")->get();
        }

        $kategori = Kategori::all();

        return view('pembeli.beranda', compact('data', 'kategori'));
    }
}
