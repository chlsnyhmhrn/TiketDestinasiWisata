<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EditDataDiriController extends Controller
{
    public function index()
    {
        return view('pembeli.edit_data');
    }
}
