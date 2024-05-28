<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Destinasi;


class BerandaController extends Controller
{
    public function index(){
        return view('pembeli.beranda');
    }

    public function listDestinasi(){
        $data = Destinasi::get();

        return view('pembeli.beranda',compact('data'));
    }
}
