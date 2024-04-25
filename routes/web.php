<?php

use App\Http\Controllers\DaftarLokasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\OrderanMasukController;


Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD

Route::get('/destinasi', [DestinasiController::class, 'destinasi']);
=======
Route::get('/', [HomeController::class, 'home']);
Route::get('/destinasi', [DestinasiController::class, 'Destinasi']);
>>>>>>> 4fd81a392710d7f4b20657bb090c39b9b3b16b53
Route::get('/daftarlokasi', [DaftarLokasiController::class, 'daftarlokasi']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/riwayat_transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat_transaksi');
Route::get('/orderan_masuk', [OrderanMasukController::class, 'index'])->name('orderan_masuk');