<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Route: :get('/', function(){
    // return view('welcone');
// });

Route::get('/', [LoginController::class, 'index']);
Route::get('/contact', [LoginController::class, 'contact']);
