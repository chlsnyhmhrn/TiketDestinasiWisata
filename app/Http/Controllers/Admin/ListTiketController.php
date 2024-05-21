<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListTiketController extends Controller
{
    public function index()
    {
        return view('admin.list_tiket');
    }
}
