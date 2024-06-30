<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Tiket;
use App\Models\User;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index(Request $request)
    {
        $query = Tiket::query();

        if ($request->has('cari') && $request->cari != '') {
            $query->join('users', 'tbl_tiket.id_user', '=', 'users.id_user')
                ->join('tbl_destinasi', 'tbl_tiket.id_destinasi', '=', 'tbl_destinasi.id_destinasi')
                ->where(function ($subQuery) use ($request) {
                    $subQuery->where('users.full_name', 'like', '%' . $request->cari . '%')
                        ->orWhere('tbl_destinasi.nama_destinasi', 'like', '%' . $request->cari . '%')
                        ->orWhere('tbl_tiket.code_tiket', 'like', '%' . $request->cari . '%');
                });
        }

        if ($request->has('status') && $request->status != '') {
            $query->where('tbl_tiket.status', $request->status);
        }

        $tiket = $query->orderByDesc('tbl_tiket.tanggal_pesanan')
            ->get(['tbl_tiket.*']);

        return view('admin.list_tiket', compact('tiket'));
    }

    public function detail($id_tiket)
    {
        $tiket = Tiket::where('id_tiket', $id_tiket)->firstOrFail();
        $user = User::where('user_type', 'pembeli')->get();
        $destinasi = Destinasi::get();

        return view('admin.detail_tiket', compact('tiket', 'user', 'destinasi'));
    }

    public function addView()
    {
        $user = User::where('user_type', 'pembeli')->get();
        $destinasi = Destinasi::get();
        return view('admin.tambah_tiket', compact('user', 'destinasi'));
    }

    public function addAction(Request $request)
    {
        try {
            $this->validate($request, [
                'id_destinasi' => 'required|integer',
                'id_user' => 'required|integer',
                'total_pesanan' => 'required|integer',
                'tanggal_pesanan' => 'required|date',
                'tanggal_kunjungan' => 'required|date',
                'status' => 'required|integer',
            ]);

            $destinasi = Destinasi::where('id_destinasi', $request->id_destinasi)->first();

            $total_harga = $request->total_pesanan * $destinasi->harga;
            $code_tiket = $this->getCode();
            $tiket = new Tiket([
                'id_destinasi' => $request->id_destinasi,
                'id_user' => $request->id_user,
                'total_pesanan' => $request->total_pesanan,
                'total_harga' => $total_harga,
                'tanggal_pesanan' => $request->tanggal_pesanan,
                'tanggal_kunjungan' => $request->tanggal_kunjungan,
                'status' => $request->status,
                'code_tiket' => $code_tiket
            ]);

            $tiket->save();

            return redirect()->route('admin.detail_tiket', $tiket->id_tiket)->with('success', 'Tiket berhasil ditambah.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    private function getCode()
    {
        $n = 12;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }

    public function update(Request $request, $id_tiket)
    {
        try {
            $this->validate($request, [
                'id_destinasi' => 'required|integer',
                'id_user' => 'required|integer',
                'total_pesanan' => 'required|integer',
                'total_harga' => 'required|integer',
                'tanggal_pesanan' => 'required|date',
                'tanggal_kunjungan' => 'required|date',
                'status' => 'required|string',
            ]);

            $tiket = Tiket::find($id_tiket);

            $tiket->id_destinasi = $request->id_destinasi;
            $tiket->id_user = $request->id_user;
            $tiket->total_pesanan = $request->total_pesanan;
            $tiket->total_harga = $request->total_harga;
            $tiket->tanggal_pesanan = $request->tanggal_pesanan;
            $tiket->tanggal_kunjungan = $request->tanggal_kunjungan;
            $tiket->status = $request->status;

            $tiket->save();

            return redirect()->route('admin.detail_tiket', $id_tiket)->with('success', 'Berhasil update tiket.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function delete($id_tiket)
    {
        try {
            $tiket = Tiket::find($id_tiket);

            $tiket->delete();

            return redirect()->route('admin.list_tiket')->with('success', 'Tiket berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
