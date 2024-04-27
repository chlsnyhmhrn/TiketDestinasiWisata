<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarLokasiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\DetailDestinasiContoller;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\RiwayatTransaksiController;
use App\Http\Controllers\OrderanMasukController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Masuk', function () {
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

Route::get('/DataDiri', function () {
    return view('editDataDiri');
});

Route::get('/Favorit', function () {
    return view('favorit');
});

Route::get('/', [BerandaController::class, 'index']);
Route::get('/Detail', [DetailDestinasiContoller::class, 'index']);
Route::get('/Kategori', [KategoriController::class, 'index']);
Route::get('/Invoice', [InvoiceController::class, 'index']);


