<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('pages.daftar');
    }

    public function process_register()
    {
        
    }

    public function confirm_page()
    {
        return view('pages.daftar-konfirmasi');
    }

    public function success_page()
    {
        return view('pages.daftar-berhasil');
    }
}
