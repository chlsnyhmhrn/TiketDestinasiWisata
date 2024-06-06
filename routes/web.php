<?php

use App\Http\Controllers\Admin\EditAkunAdminControllerController;
use App\Http\Controllers\Admin\ListPenggunaController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\ListUserController;
use App\Http\Controllers\Pembeli\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pembeli\BerandaController;
use App\Http\Controllers\Pembeli\DetailDestinasiContoller;
use App\Http\Controllers\Pembeli\EditDataDiriController;
use App\Http\Controllers\Pembeli\FavoritController;
use App\Http\Controllers\Pembeli\InvoiceController;
use App\Http\Controllers\Pembeli\KategoriController;
use App\Http\Controllers\Pembeli\RiwayatPembelianController;
use App\Http\Controllers\penjual\DashboardController;
use App\Http\Controllers\Penjual\OrderanMasukController;
use App\Http\Controllers\Penjual\RiwayatPesananController;
use App\Http\Controllers\Penjual\RiwayatTransaksiController;
use App\Http\Controllers\Penjual\DetailProdukController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\ListDestinasiController;
use App\Http\Controllers\Admin\ListTiketController;
use App\Http\Controllers\Admin\EditAkunAdminController;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [BerandaController::class, 'index'])->name('user.beranda');
Route::get('/detail/{id}', [DetailDestinasiContoller::class, 'detailDestinasi']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
Route::get('actionLogout', [AuthController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

Route::get('/favorit', [FavoritController::class, 'index'])->middleware('auth');
Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/user/{id_user}', [EditDataDiriController::class, 'index'])->middleware('auth');
Route::put('/user/{id_user}/update', [EditDataDiriController::class, 'update'])->name('user.edit')->middleware('auth');
Route::get('/riwayat_pembelian', [RiwayatPembelianController::class, 'index'])->middleware('auth');

Route::get('/register_penjual', [AuthController::class, 'registrasiPenjual']);
Route::get('/input_destinasi', [AuthController::class, 'inputDestinasi']);
Route::post('/input_detinasi/action', [AuthController::class, 'inputDestinasiAction'])->name('inputDestinasiAction');
Route::get('/input_destinasi', [AuthController::class, 'kategori'])->name('kategori');
Route::get('/register_pembeli', [AuthController::class, 'registrasiPembeli']);
Route::post('/register/action', [AuthController::class, 'actionRegister'])->name('actionRegister');

Route::get('/penjual/riwayat_pesanan', [RiwayatPesananController::class, 'index']);
Route::get('/penjual/orderan_masuk', [OrderanMasukController::class, 'index']);
Route::get('/penjual/dashboard', [DashboardController::class, 'index']);
Route::get('/penjual/riwayat_transaksi', [RiwayatTransaksiController::class, 'index']);
Route::get('/penjual/detail_produk', [DetailProdukController::class, 'index']);


Route::get('/admin/dashboard', [DashboardAdminController::class, 'index']);
Route::get('/admin/list_pengguna', [ListUserController::class, 'list']);
Route::get('/admin/list_destinasi', [ListDestinasiController::class, 'index']);
Route::get('/admin/list_tiket', [ListTiketController::class, 'index']);


//27-4-2024 10:21pm

Route::get('/edit_data', [EditDataDiriController::class, 'index']);
Route::get('/riwayat_pesanan', [RiwayatPesananController::class, 'index']);
Route::get('/riwayat_pembelian', [RiwayatPembelianController::class, 'index']);
Route::get('/orderan_masuk', [OrderanMasukController::class, 'index']);
Route::get('/list_pengguna', [ListPenggunaController::class, 'index']);
Route::get('/editakun_admin', [EditAkunAdminController::class, 'index']);
