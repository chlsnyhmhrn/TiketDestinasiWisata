<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\{
    DashboardAdminController,
    EditAkunAdminController,
    ListDestinasiController,
    ListTiketController,
    PenggunaController
};
use App\Http\Controllers\Pembeli\{
    BerandaController,
    DetailDestinasiContoller,
    EditDataDiriController,
    FavoritController,
    InvoiceController,
    KategoriController,
    RiwayatPembelianController
};
use App\Http\Controllers\Penjual\{
    DashboardController,
    DetailDestinasiController,
    OrderanMasukController,
    RiwayatPesananController,
};
use Illuminate\Support\Facades\Route;

// Auth
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/actionLogin', 'actionLogin')->name('actionLogin');
    Route::get('actionLogout', 'actionLogout')->name('actionLogout')->middleware('auth');
    Route::get('/register_penjual', 'registrasiPenjual');
    Route::get('/register_pembeli', 'registrasiPembeli');
    Route::post('/register/action', 'actionRegister')->name('actionRegister');
    Route::get('/input_destinasi', 'inputDestinasi');
    Route::post('/input_detinasi/action', 'inputDestinasiAction')->name('inputDestinasiAction');
    Route::get('/input_destinasi', 'kategori')->name('kategori');
});

// Pembeli
Route::prefix('')->group(function () {
    Route::get('/', [BerandaController::class, 'index'])->name('user.beranda');
    Route::prefix('detail')->group(function () {
        Route::get('{id_destinasi}', [DetailDestinasiContoller::class, 'detailDestinasi'])->name('detailDestinasi');
        Route::post('tambah_favorit', [DetailDestinasiContoller::class, 'tambahFavorit'])->name('detDestinasi.tambah_favorit')->middleware('auth');
        Route::post('hapus_favorit', [DetailDestinasiContoller::class, 'hapusFavorit'])->name('detDestinasi.hapus_favorit')->middleware('auth');
        Route::post('tambah_tiket', [DetailDestinasiContoller::class, 'pesanTiket'])->name('detDestinasi.tambah_tiket')->middleware('auth');
    });
    Route::get('favorit/user={id_user}', [FavoritController::class, 'index'])->name('favorit')->middleware('auth');
    Route::post('favorit/hapus_favorit', [FavoritController::class, 'hapusFavorit'])->name('favorit.hapus')->middleware('auth');
    Route::get('riwayat_pembelian/user={id_user}', [RiwayatPembelianController::class, 'index'])->name('riwayatPembelian')->middleware('auth');
    Route::put('riwayat_pembelian/batalkan_pesanan/{id_tiket}', [RiwayatPembelianController::class, 'batalkanPesanan'])->name('riwayatPembelian.batalkan_pesanan')->middleware('auth');
    Route::get('invoice/{id_tiket}', [InvoiceController::class, 'index'])->name('invoice')->middleware('auth');
    Route::get('kategori/{id_kategori}', [KategoriController::class, 'index'])->name('halaman.kategori');
    Route::prefix('user/{id_user}')->group(function () {
        Route::get('', [EditDataDiriController::class, 'index'])->middleware('auth');
        Route::put('update', [EditDataDiriController::class, 'update'])->name('user.edit')->middleware('auth');
    });
});

// Penjual
Route::prefix('penjual')->middleware('auth')->group(function () {
    Route::get('dashboard/{id_user}', [DashboardController::class, 'index'])->name('penjual.dashboard');
    Route::prefix('detail')->group(function () {
        Route::get('edit/{id_destinasi}', [DetailDestinasiController::class, 'editDetailView'])->name('penjual.edit_detail_view');
        Route::get('{id_destinasi}', [DetailDestinasiController::class, 'index'])->name('penjual.detail');
        Route::put('edit_action/{id_destinasi}', [DetailDestinasiController::class, 'editDetail'])->name('penjual.edit_detail_action');
        Route::put('edit_status_action/{id_destinasi}', [DetailDestinasiController::class, 'editStatus'])->name('penjual.edit_status_action');
    });
    Route::prefix('orderan_masuk')->group(function () {
        Route::get('{id_destinasi}', [OrderanMasukController::class, 'index'])->name('penjual.orderan_masuk');
        Route::put('batalkan_pesanan/{id_tiket}', [OrderanMasukController::class, 'batalkanPesanan'])->name('penjual.batalkan_pesanan');
        Route::put('setujui_pesanan/{id_tiket}', [OrderanMasukController::class, 'setujuiPesanan'])->name('penjual.setujui_pesanan');
    });
    Route::prefix('riwayat_pesanan')->group(function (){
        Route::get('{id_destinasi}', [RiwayatPesananController::class, 'index'])->name('penjual.riwayat_pesanan');
        Route::get('invoice/{id_tiket}', [RiwayatPesananController::class, 'invoice'])->name('penjual.invoice');
    });
});

// Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
    Route::prefix('pengguna')->group(function () {
        Route::get('', [PenggunaController::class, 'list'])->name('admin.list_pengguna');
        Route::get('{id_user}', [PenggunaController::class, 'detail'])->name('admin.detail_pengguna');
        Route::put('update/{id_user}', [PenggunaController::class, 'update'])->name('admin.update_pengguna');
    });
    Route::get('list_destinasi', [ListDestinasiController::class, 'index'])->name('admin.list_destinasi');
    Route::get('list_tiket', [ListTiketController::class, 'index'])->name('admin.list_tiket');
    Route::get('editakun_admin', [EditAkunAdminController::class, 'index']);
    Route::get('/admin/destinasi/{id}', [ListDestinasiController::class, 'show'])->name('admin.destinasi.show');


});