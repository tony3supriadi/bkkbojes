<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarMitraController extends Controller
{
    public function index()
    {
        return view('pages.daftar-mitra');
    }
}
