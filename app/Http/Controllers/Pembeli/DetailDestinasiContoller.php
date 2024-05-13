<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailDestinasiContoller extends Controller
{
    public function index()
    {
        return view('pembeli.detail_destinasi');
    }
}
