<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [DestinasiController::class, 'index']);
Route::get('/contact', [DestinasiController::class, 'contact']);

