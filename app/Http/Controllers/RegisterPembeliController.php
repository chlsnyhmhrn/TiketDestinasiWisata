<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterPembeliController extends Controller
{
    public function index()
    {
        return view('register_pembeli');
    }
}
