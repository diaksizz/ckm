<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function produk()
    {
        return view('admin.produk.index');
    }
}
