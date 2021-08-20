<?php

namespace App\Http\Controllers\Akun;

use App\Http\Controllers\Controller;
use App\Models\Keterampilan;
use App\Models\Organisasi;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Personal;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function redirectTo()
    {
        return redirect()->route('akun.profile.personal');
    }

    public function personal()
    {
        $id = Auth::guard('personal')->user()->id;
        $personal = Personal::find($id);
        return view('pages.akun.profile.personal', compact('personal'));
    }

    public function personal_edit($id)
    {
        $personal = Personal::find(decrypt($id));

        $wilayah = new Wilayah();
        $provinsi = $wilayah->provinsi();
        $kabupaten = [];
        if ($personal->provinsi) {
            $kabupaten = $wilayah->kabupaten($personal->provinsi);
        }

        $kecamatan = [];
        if ($personal->kecamatan) {
            $kecamatan = $wilayah->kecamatan($personal->kabupaten);
        }

        $desa = [];
        if ($personal->desa) {
            $desa = $wilayah->desa($personal->kecamatan);
        }

        return view('pages.akun.profile.personal_edit', compact('personal', 'provinsi', 'kabupaten', 'kecamatan', 'desa'));
    }

    public function personal_update(Request $request, $id)
    {
        $personal = Personal::find(decrypt($id));
        $personal->fill($request->all());
        $personal->save();

        return redirect()->route('akun.profile.personal')
            ->with('success', 'Data personal berhasil di ubah.');
    }

    public function pengalaman()
    {
        $id = Auth::guard('personal')->user()->id;
        $pengalaman = Pengalaman::where('personal_id', '=', $id)->get();
        return view('pages.akun.profile.pengalaman', compact('pengalaman'));
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
        $id = Auth::guard('personal')->user()->id;
        $pendidikan = Pendidikan::where('personal_id', '=', $id)->get();
        return view('pages.akun.profile.pendidikan', compact('pendidikan'));
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
        $id = Auth::guard('personal')->user()->id;
        $keterampilan = Keterampilan::where('personal_id', '=', $id)->get();
        return view('pages.akun.profile.keterampilan', compact('keterampilan'));
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
        $id = Auth::guard('personal')->user()->id;
        $organisasi = Organisasi::where('personal_id', '=', $id)->get();
        return view('pages.akun.profile.organisasi', compact('organisasi'));
    }

    public function organisasi_edit()
    {
        return view('pages.akun.profile.organisasi_edit');
    }

    public function organisasi_update(Request $request)
    {
    }
}
