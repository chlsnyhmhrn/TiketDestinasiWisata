<?php

namespace App\Http\Controllers\Penjual;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Gambar;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DetailDestinasiController extends Controller
{
    public function index($id_destinasi)
    {
        $destinasi = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();

        return view('penjual.detail_destinasi', compact('destinasi'));
    }

    public function editDetailView($id_destinasi)
    {
        $destinasi = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();
        $kategori = Kategori::get();

        return view('penjual.detail_destinasi_edit', compact('destinasi', 'kategori'));
    }

    public function editStatus(Request $request, $id_destinasi) {
        try {
            $destinasi = Destinasi::findOrFail($id_destinasi);
            $destinasi->status = $request->status;
            $destinasi->save();
    
            return response()->json(['message' => 'Status berhasil diupdate'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update status: ' . $e->getMessage()], 500);
        }
    }

    public function editDetail(Request $request, $id_destinasi)
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

            if ($request->hasFile('images')) {
                // Delete existing images if new ones are uploaded
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
            return redirect()->route('penjual.edit_detail_view', $id_destinasi);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
