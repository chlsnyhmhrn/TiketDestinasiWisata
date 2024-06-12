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

        return view('penjual.dashboard', compact('destinasi', 'tiket', 'pendapatan', 'filter', 'proses'));
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

    private function calculatePending($id_destinasi)
    {
        $proses = Tiket::where('id_destinasi', $id_destinasi)
        ->where('status', 'Diproses')
        ->count();

        return (int) $proses;
    }
}
