<?php

use App\Http\Controllers\DaftarLokasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\DetailDestinasiContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\OrderanMasukController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/RegisterPembeli', function () {
    return view('RegisterPembeli');
});

Route::get('/RegisterPenjual', function () {
    return view('RegisterPenjual');
});

Route::get('/RiwayatPembelian', function () {
    return view('RiwayatPembelian');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/destinasi', [DestinasiController::class, 'index']);
Route::get('/daftarlokasi', [DaftarLokasiController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/riwayat_transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat_transaksi');
Route::get('/orderan_masuk', [OrderanMasukController::class, 'index'])->name('orderan_masuk');
Route::get('/detail', [DetailDestinasiContoller::class, 'index']);
