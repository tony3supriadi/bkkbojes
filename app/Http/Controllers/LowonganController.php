<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $daftarLowongan = Lowongan::orderBy('create_by', 'DESC')->paginate(15);
        return view('pages.lowongan.lowongan', compact('daftarLowongan'));
    }

    public function lowongan_detail()
    {
        return view('pages.lowongan.lowongan-detail');
    }
}
