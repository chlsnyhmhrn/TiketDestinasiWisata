<?php

use App\Http\Controllers\DaftarLokasiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\OrderanMasukController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/destinasi', [DestinasiController::class, 'destinasi']);
Route::get('/daftarlokasi', [DaftarLokasiController::class, 'daftarlokasi']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/riwayat_transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat_transaksi');
Route::get('/orderan_masuk', [OrderanMasukController::class, 'index'])->name('orderan_masuk');