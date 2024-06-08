<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditAkunAdminController extends Controller
{
    public function index()
    {
        return view('admin.editakun_admin');
    }
}
