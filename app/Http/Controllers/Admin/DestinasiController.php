<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destinasi;
use App\Models\Gambar;
use App\Models\Kategori;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    public function index(Request $request)
    {
        $query = Destinasi::query();

        if ($request->has('cari') && $request->cari != '') {
            $query->where('nama_destinasi', 'like', '%' . $request->cari . '%')
            ->orWhere('status', '=', $request->cari);
        }

        $destinasi = $query->get();

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
    
    public function detailDestinasi($id)
    {
        $destinasi = Destinasi::with('user')->findOrFail($id);
        $kategori = Kategori::get();

        return view('admin.detail_destinasi', compact('destinasi', 'kategori'));
    }

    public function edit(Request $request, $id_destinasi)
    {
        try {
            $this->validate($request, [
                'images' => 'nullable|array|min:3|max:3',
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
                'id_kategori' => 'required|integer',
                'nama_destinasi' => 'required|string|max:255',
                'lokasi' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'harga' => 'required|integer',
            ]);

            $destinasi = Destinasi::find($id_destinasi);

            if (!$destinasi) {
                return redirect()->back()->with('error', 'Destinasi not found.');
            }

            $destinasi->id_kategori = $request->id_kategori;
            $destinasi->nama_destinasi = $request->nama_destinasi;
            $destinasi->lokasi = $request->lokasi;
            $destinasi->deskripsi = $request->deskripsi;
            $destinasi->harga = $request->harga;
            $destinasi->jam_buka = $request->jam_buka;
            $destinasi->jam_tutup = $request->jam_tutup;
            $destinasi->status = $request->status;

            if ($request->hasFile('images')) {
                $existingImages = Gambar::where('id_destinasi', $id_destinasi)->get();
                foreach ($existingImages as $image) {
                    Storage::disk('public')->delete($image->url_gambar);
                    $image->delete();
                }

                foreach ($request->file('images') as $file_gambar) {
                    $gambar = new Gambar;
                    $path = $file_gambar->store('images', 'public');
                    $gambar->url_gambar = $path;
                    $gambar->id_destinasi = $id_destinasi;
                    $gambar->save();
                }
            }

            $destinasi->save();

            Session::flash('success', 'Update Berhasil.');
            return redirect()->route('admin.detail_destinasi', $id_destinasi);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

}
