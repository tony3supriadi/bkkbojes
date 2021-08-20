<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function redirectTo()
    {
        return redirect()->route('akun.profile.personal');
    }

    public function resume()
    {
        return view('pages.akun.resume.index');
    }

    public function resume_exports()
    {
    }

    public function pemberitahuan()
    {
        return view('pages.akun.pemberitahuan.index');
    }

    public function pemberitahuan_detail()
    {
        return view('pages.akun.pemberitahuan.detail');
    }

    public function lowongan_tersimpan()
    {
        return view('pages.akun.lowongan_tersimpan.index');
    }

    public function lamaran_terkirim()
    {
        return view('pages.akun.lamaran_terkirim.index');
    }

    public function latihan_tes()
    {
        return view('pages.akun.latihan_tes.index');
    }
}
