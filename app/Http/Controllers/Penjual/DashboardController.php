<?php

namespace App\Http\Controllers\penjual;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request, $id_user)
    {
        $destinasi = Destinasi::where("id_user", $id_user)->first();
        $tiket = Tiket::where("id_destinasi", $destinasi->id_destinasi)->get();

        $filter = $request->input('filter', 'daily');
        $pendapatan = $this->calculateRevenue($destinasi->id_destinasi, $filter);
        $proses = $this->calculatePending($destinasi->id_destinasi);

        $filter_pengunjung = $request->input('filter_pengunjung', 'daily');
        $pengunjung = $this->calculateVisitors($destinasi->id_destinasi, $filter_pengunjung);

        $pesanan_masuk = $tiket->filter(function ($item) {
            return $item->status === 'Diproses';
        })->sortByDesc('tanggal_pesanan')->take(7);

        $riwayat_pesanan = $tiket->filter(function ($item) {
            return $item->status === 'Dibatalkan' || $item->status === 'Disetujui';
        })->sortByDesc('tanggal_pesanan')->take(7);

        return view('penjual.dashboard', compact('destinasi', 'tiket', 'pendapatan', 'filter', 'proses', 'filter_pengunjung', 'pengunjung', 'pesanan_masuk', 'riwayat_pesanan'));
    }

    private function calculateRevenue($id_destinasi, $filter)
    {
        switch ($filter) {
            case 'daily':
                $pendapatan = Tiket::where('id_destinasi', $id_destinasi)
                    ->where('status', 'Disetujui')
                    ->whereDate('tanggal_pesanan', Carbon::today())
                    ->sum('total_harga');
                break;
            case 'weekly':
                $pendapatan = Tiket::where('id_destinasi', $id_destinasi)
                    ->where('status', 'Disetujui')
                    ->whereBetween('tanggal_pesanan', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                    ->sum('total_harga');
                break;
            case 'monthly':
                $pendapatan = Tiket::where('id_destinasi', $id_destinasi)
                    ->where('status', 'Disetujui')
                    ->whereMonth('tanggal_pesanan', Carbon::now()->month)
                    ->whereYear('tanggal_pesanan', Carbon::now()->year)
                    ->sum('total_harga');
                break;
            default:
                $pendapatan = 0;
                break;
        }
        return (int) $pendapatan;
    }

    private function calculateVisitors($id_destinasi, $filter)
    {
        switch ($filter) {
            case 'daily':
                $pengunjung = Tiket::where('id_destinasi', $id_destinasi)
                    ->where('status', 'Disetujui')
                    ->whereDate('tanggal_pesanan', Carbon::today())
                    ->sum('total_pesanan');
                break;
            case 'weekly':
                $pengunjung = Tiket::where('id_destinasi', $id_destinasi)
                    ->where('status', 'Disetujui')
                    ->whereBetween('tanggal_pesanan', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                    ->sum('total_pesanan');
                break;
            case 'monthly':
                $pengunjung = Tiket::where('id_destinasi', $id_destinasi)
                    ->where('status', 'Disetujui')
                    ->whereMonth('tanggal_pesanan', Carbon::now()->month)
                    ->whereYear('tanggal_pesanan', Carbon::now()->year)
                    ->sum('total_pesanan');
                break;
            default:
                $pengunjung = 0;
                break;
        }
        return (int) $pengunjung;
    }

    private function calculatePending($id_destinasi)
    {
        $proses = Tiket::where('id_destinasi', $id_destinasi)
            ->where('status', 'Diproses')
            ->count();

        return (int) $proses;
    }
}
