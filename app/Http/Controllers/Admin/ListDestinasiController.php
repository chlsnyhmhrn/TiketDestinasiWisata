<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Kategori;

class ListDestinasiController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::all();
        return view('admin.list_destinasi', compact('destinasi'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.input_destinasi', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_destinasi' => 'required|string|max:255',
            'id_kategori' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string',
            'status' => 'required|string',
            'jam_buka' => 'required|date_format:H:i',
            'jam_tutup' => 'required|date_format:H:i',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destinasi = new Destinasi();
        $destinasi->nama_destinasi = $request->nama_destinasi;
        $destinasi->id_kategori = $request->id_kategori;
        $destinasi->lokasi = $request->lokasi;
        $destinasi->harga = $request->harga;
        $destinasi->deskripsi = $request->deskripsi;
        $destinasi->status = $request->status;
        $destinasi->jam_buka = $request->jam_buka;
        $destinasi->jam_tutup = $request->jam_tutup;
        $destinasi->save();

        return redirect()->route('listDestinasi')->with('success', 'Destinasi berhasil ditambahkan');
    }
}
