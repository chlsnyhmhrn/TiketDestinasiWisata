<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Tiket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(Request $request)
    {
        $user = User::take(10)->get();
        $destinasi = Destinasi::take(10)->get();

        $filter_user = $request->input('filter_user', 'semua');
        $jumlah_user = $this->hitungUser($filter_user);

        $filter_destinasi = $request->input('filter_destinasi', 'semua');
        $jumlah_destinasi = $this->hitungDestinasi($filter_destinasi);

        $filter_tiket = $request->input('filter_tiket', 'semua');
        $jumlah_tiket = $this->hitungTiket($filter_tiket);

        return view('admin.dashboard_admin', compact(
            'user', 
            'destinasi',
            'filter_user', 
            'jumlah_user',
            'filter_destinasi', 
            'jumlah_destinasi',
            'filter_tiket',
            'jumlah_tiket'
        ));
    }

    private function hitungUser($filter)
    {
        switch ($filter) {
            case 'semua':
                $jumlah_user = User::count();
                break;
            case 'pembeli':
                $jumlah_user = User::where('user_type', 'pembeli')->count();
                break;
            case 'penjual':
                $jumlah_user = User::where('user_type', 'penjual')->count();
                break;
            default:
                $jumlah_user = 0;
                break;
        }

        return (int) $jumlah_user;
    }

    private function hitungDestinasi($filter)
    {
        switch ($filter) {
            case 'semua':
                $jumlah_destinasi = Destinasi::count();
                break;
            case 'buka':
                $jumlah_destinasi = Destinasi::where('status', 'buka')->count();
                break;
            case 'tutup':
                $jumlah_destinasi = Destinasi::where('status', 'tutup')->count();
                break;
            default:
                $jumlah_destinasi = 0;
                break;
        }

        return (int) $jumlah_destinasi;
    }

    private function hitungTiket($filter)
    {
        switch ($filter) {
            case 'semua':
                $jumlah_tiket = Tiket::count();
                break;
            case 'diproses':
                $jumlah_tiket = Tiket::where('status', 'Diproses')->count();
                break;
            case 'disetujui':
                $jumlah_tiket = Tiket::where('status', 'Disetujui')->count();
                break;
            case 'dibatalkan':
                $jumlah_tiket = Tiket::where('status', 'Dibatalkan')->count();
                break;
            default:
                $jumlah_tiket = 0;
                break;
        }

        return (int) $jumlah_tiket;
    }
}
