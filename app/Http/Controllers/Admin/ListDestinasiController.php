<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListDestinasiController extends Controller
{
    public function index()
    {
        return view('admin.list_destinasi');
    }
}