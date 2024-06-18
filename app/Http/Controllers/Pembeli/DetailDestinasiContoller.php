<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Favorit;
use App\Models\Kategori;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DetailDestinasiContoller extends Controller
{
    public function index()
    {
        return view('pembeli.detail_destinasi');
    }

    public function detailDestinasi($id_destinasi){
        $data = Destinasi::where('id_destinasi', $id_destinasi)->firstOrFail();
        $kategori = Kategori::all();
        $isAuthenticated = Auth::check();

        if(Auth::check() && Auth::user()->user_type == 'pembeli'){
            $isFavorit = Favorit::where('id_user', Auth::user()->id_user)
                                ->where('id_destinasi', $id_destinasi)
                                ->exists();
                                
            return view('pembeli.detail_destinasi', compact('data', 'kategori', 'isFavorit', 'isAuthenticated'));
        }

        return view('pembeli.detail_destinasi', compact('data', 'kategori', 'isAuthenticated'));
    }

    public function tambahFavorit(Request $request){
        $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'id_destinasi' => 'required|exists:tbl_destinasi,id_destinasi'
        ]);
    
        $favorit = Favorit::create([
            'id_user' => $request->input('id_user'),
            'id_destinasi' => $request->input('id_destinasi')
        ]);
    
        Session::flash('favorit_success', 'Destinasi wisata berhasil ditambahkan ke favorit');
        return redirect()->route('detailDestinasi', ['id_destinasi' => $favorit->id_destinasi]);
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
        return redirect()->route('detailDestinasi', ['id_destinasi' => $request->input('id_destinasi')]);
    }

    public function pesanTiket(Request $request)
    {
        $code_tiket = $this->getCode();
        $tanggal_pesanan = date("Y-m-d H:i:s");
        $tiket = Tiket::create([
            'id_destinasi' => $request->input('id_destinasi'),
            'id_user'=> $request->input('id_user'),
            'total_pesanan'=> $request->input('total_pesanan'),
            'total_harga'=> $request->input('total_harga'),
            'tanggal_pesanan'=> $tanggal_pesanan,
            'tanggal_kunjungan'=> $request->input('tanggal_kunjungan'),
            'code_tiket'=> $code_tiket,
        ]);

        Session::flash('tiket_success', 'Pembelian tiket destinasi wisata berhasil!');
        return redirect()->route('detailDestinasi', ['id_destinasi' => $tiket->id_destinasi]);
    }

    private function getCode() {
        $n = 12;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
 
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
 
        return $randomString;
    }
}