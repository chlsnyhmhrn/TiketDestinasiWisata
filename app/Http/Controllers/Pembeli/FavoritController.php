<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Favorit;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FavoritController extends Controller
{
    public function index($id_user)
    {
        $favorit = Favorit::where('id_user', $id_user)->get();
        $kategori = Kategori::all();

        return view('pembeli.favorit', compact('favorit','kategori'));
    }

    public function hapusFavorit(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'id_destinasi' => 'required|exists:tbl_destinasi,id_destinasi'
        ]);

        Favorit::where('id_user', $request->input('id_user'))
               ->where('id_destinasi', $request->input('id_destinasi'))
               ->delete();

        Session::flash('favorit_success', 'Destinasi wisata berhasil dihapus dari favorit');
        return redirect()->route('favorit', ['id_user' => $request->input('id_user')]);
    }
}
