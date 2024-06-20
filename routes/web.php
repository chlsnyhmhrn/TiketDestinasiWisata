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
use App\Http\Controllers\Penjual\DetailDestinasiController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
Route::get('actionLogout', [AuthController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
Route::get('/register_penjual', [AuthController::class, 'registrasiPenjual']);
Route::get('/register_pembeli', [AuthController::class, 'registrasiPembeli']);
Route::post('/register/action', [AuthController::class, 'actionRegister'])->name('actionRegister');
Route::get('/input_destinasi', [AuthController::class, 'inputDestinasi']);
Route::post('/input_detinasi/action', [AuthController::class, 'inputDestinasiAction'])->name('inputDestinasiAction');
Route::get('/input_destinasi', [AuthController::class, 'kategori'])->name('kategori');

Route::get('/', [BerandaController::class, 'index'])->name('user.beranda');
Route::get('/detail/{id_destinasi}', [DetailDestinasiContoller::class, 'detailDestinasi'])->name('detailDestinasi');
Route::post('/detail/tambah_favorit', [DetailDestinasiContoller::class, 'tambahFavorit'])->name('detDestinasi.tambah_favorit')->middleware('auth');
Route::post('/detail/hapus_favorit', [DetailDestinasiContoller::class, 'hapusFavorit'])->name('detDestinasi.hapus_favorit')->middleware('auth');
Route::post('/detail/tambah_tiket', [DetailDestinasiContoller::class, 'pesanTiket'])->name('detDestinasi.tambah_tiket')->middleware('auth');

Route::get('/favorit/user={id_user}', [FavoritController::class, 'index'])->name('favorit')->middleware('auth');
Route::post('/favorit/hapus_favorit', [FavoritController::class, 'hapusFavorit'])->name('favorit.hapus')->middleware('auth');

Route::get('/riwayat_pembelian/user={id_user}', [RiwayatPembelianController::class, 'index'])->name('riwayatPembelian')->middleware('auth');
Route::put('/riwayat_pembelian/batalkan_pesanan/{id_tiket}', [RiwayatPembelianController::class, 'batalkanPesanan'])->name('riwayatPembelian.batalkan_pesanan')->middleware('auth');
Route::get('/invoice/{id_tiket}', [InvoiceController::class, 'index'])->name('invoice')->middleware('auth');

Route::get('/kategori/{id_kategori}', [KategoriController::class, 'index'])->name('halaman.kategori');
Route::get('/user/{id_user}', [EditDataDiriController::class, 'index'])->middleware('auth');
Route::put('/user/{id_user}/update', [EditDataDiriController::class, 'update'])->name('user.edit')->middleware('auth');

Route::get('/penjual/dashboard/{id_user}', [DashboardController::class, 'index'])->name('penjual.dashboard')->middleware('auth');
Route::get('/penjual/detail/edit/{id_destinasi}', [DetailDestinasiController::class, 'editDetailView'])->name('penjual.edit_detail_view')->middleware('auth');
Route::get('/penjual/detail/{id_destinasi}', [DetailDestinasiController::class, 'index'])->name('penjual.detail')->middleware('auth');
Route::put('/penjual/detail/edit_action/{id_destinasi}', [DetailDestinasiController::class,'editDetail'])->name('penjual.edit_detail_action')->middleware('auth');
Route::put('/penjual/detail/edit_status_action/{id_destinasi}', [DetailDestinasiController::class,'editStatus'])->name('penjual.edit_status_action')->middleware('auth');
Route::get('/penjual/riwayat_pesanan', [RiwayatPesananController::class, 'index']);
Route::get('/penjual/orderan_masuk', [OrderanMasukController::class, 'index']);
Route::get('/penjual/riwayat_transaksi', [RiwayatTransaksiController::class, 'index']);

Route::get('/admin/dashboard', [DashboardAdminController::class, 'index']);
Route::get('/admin/list_pengguna', [ListUserController::class, 'list']);
Route::get('/admin/list_destinasi', [ListDestinasiController::class, 'index']);
Route::get('/admin/list_tiket', [ListTiketController::class, 'index']);


//27-4-2024 10:21pm

Route::get('/edit_data', [EditDataDiriController::class, 'index']);
Route::get('/riwayat_pesanan', [RiwayatPesananController::class, 'index']);
Route::get('/riwayat_pembelian', [RiwayatPembelianController::class, 'index']);
Route::get('/orderan_masuk', [OrderanMasukController::class, 'index']);
Route::get('/editakun_admin', [EditAkunAdminController::class, 'index']);