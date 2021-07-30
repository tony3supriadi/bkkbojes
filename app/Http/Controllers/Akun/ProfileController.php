<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function redirectTo()
    {
        return redirect()->route('akun.profile.personal');
    }

    public function personal()
    {
        return view('pages.akun.profile.personal');
    }

    public function personal_edit()
    {
        return view('pages.akun.profile.personal_edit');
    }

    public function personal_update(Request $request)
    {
    }

    public function pengalaman()
    {
        return view('pages.akun.profile.pengalaman');
    }

    public function pengalaman_edit()
    {
        return view('pages.akun.profile.pengalaman_edit');
    }

    public function pengalaman_update(Request $request)
    {
    }

    public function pendidikan()
    {
        return view('pages.akun.profile.pendidikan');
    }

    public function pendidikan_edit()
    {
        return view('pages.akun.profile.pendidikan_edit');
    }

    public function pendidikan_update(Request $request)
    {
    }

    public function keterampilan()
    {
        return view('pages.akun.profile.keterampilan');
    }

    public function keterampilan_edit()
    {
        return view('pages.akun.profile.keterampilan_edit');
    }

    public function keterampilan_update(Request $request)
    {
    }

    public function organisasi()
    {
        return view('pages.akun.profile.organisasi');
    }

    public function organisasi_edit()
    {
        return view('pages.akun.profile.organisasi_edit');
    }

    public function organisasi_update(Request $request)
    {
    }
}
