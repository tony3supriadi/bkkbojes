<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        return view('pages.lowongan.lowongan');
    }

    public function lowongan_detail()
    {
        return view('pages.lowongan.lowongan-detail');
    }
}
