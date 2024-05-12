<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarLokasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterPenjualController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\DetailDestinasiContoller;
use App\Http\Controllers\RiwayatPesananController;
use App\Http\Controllers\OrderanMasukController;
use App\Http\Controllers\ListPenggunaController;
use App\Http\Controllers\EditDataDiriController;
use App\Http\Controllers\RegisterPembeliController;
use App\Http\Controllers\RiwayatPembelianController;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [BerandaController::class, 'index']);
Route::get('/detail', [DetailDestinasiContoller::class, 'index']);
Route::get('/masuk', [MasukController::class, 'index']);
Route::get('/favorit', [FavoritController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/edit_data', [EditDataDiriController::class, 'index']);
Route::get('/riwayat_pesanan', [RiwayatpesananController::class, 'index']);
Route::get('/register_pembeli', [RegisterPembeliController::class, 'index']);
Route::get('/register_penjual', [RegisterPenjualController::class, 'index']);
Route::get('/riwayat_pembelian', [RiwayatPembelianController::class, 'index']);
Route::get('/orderan_masuk', [OrderanMasukController::class, 'index']);
Route::get('/list_pengguna', [ListPenggunaController::class, 'index']);

//27-4-2024 10:21pm