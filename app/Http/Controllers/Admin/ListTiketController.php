<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;

class ListTiketController extends Controller
{
    public function index()
{
    $tikets = Tiket::with(['destinasi', 'user'])->get();
    return view('admin.list_tiket', compact('tikets'));
}
}