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

    public function pengalaman_create()
    {
        $wilayah = new Wilayah();
        $provinsi = $wilayah->provinsi();
        return view('pages.akun.profile.pengalaman_create', compact('provinsi'));
    }

    public function pengalaman_store(Request $request)
    {
        $request->validate([
            "tanggal_mulai" => 'required',
            "tanggal_selesai" => $request->masih_bekerja ? "" : "required",
            "bekerja_sebagai" => "required",
            "nama_perusahaan" => "required",
            "gaji" => "numeric"
        ]);

        Pengalaman::create($request->all());
        return redirect()->route('akun.profile.pengalaman')
            ->with('success', 'Penambahan pengalaman kerja berhasil');
    }

    public function pengalaman_edit($id)
    {
        $pengalaman = Pengalaman::find(decrypt($id));

        $wilayah = new Wilayah();
        $provinsi = $wilayah->provinsi();
        $kabupaten = $wilayah->kabupaten($pengalaman->provinsi);

        return view('pages.akun.profile.pengalaman_edit', compact('pengalaman', 'provinsi', 'kabupaten'));
    }

    public function pengalaman_update(Request $request, $id)
    {
        $request->validate([
            "tanggal_mulai" => 'required',
            "tanggal_selesai" => $request->masih_bekerja ? "" : "required",
            "bekerja_sebagai" => "required",
            "nama_perusahaan" => "required",
            "gaji" => "numeric"
        ]);

        $data = $request->all();
        $data['masih_bekerja'] = 0;

        $pengalaman = Pengalaman::find(decrypt($id));
        $pengalaman->fill($data);
        $pengalaman->save();

        return redirect()->route('akun.profile.pengalaman')
            ->with('success', 'Penambahan pengalaman kerja berhasil');
    }

    public function pengalaman_destroy($id)
    {
        $pengalaman = Pengalaman::find(decrypt($id));
        $pengalaman->delete();

        return redirect()->route('akun.profile.pengalaman')
            ->with('success', 'Penambahan pengalaman kerja berhasil');
    }


    public function pendidikan()
    {
        $id = Auth::guard('personal')->user()->id;
        $pendidikan = Pendidikan::where('personal_id', '=', $id)->get();
        return view('pages.akun.profile.pendidikan', compact('pendidikan'));
    }

    public function pendidikan_create()
    {
        $wilayah = new Wilayah();
        $provinsi = $wilayah->provinsi();
        return view('pages.akun.profile.pendidikan_create', compact('provinsi'));
    }

    public function pendidikan_store(Request $request)
    {
        $request->validate([
            "bulan_mulai" => "required",
            "tahun_mulai" => "required",
            "bulan_selesai" => $request->masih_sekolah ? '' : 'required',
            "tahun_selesai" => $request->masih_sekolah ? '' : 'required',
            "nama_sekolah" => "required",
            "provinsi" => "required",
            "kabupaten" => "required",
            "jenjang_pendidikan" => "required",
            "jurusan" => "required",
            "nilai_akhir" => "required"
        ]);
        Pendidikan::create($request->all());
        return redirect()->route('akun.profile.pendidikan')
            ->with('success', 'Penambahan pendidikan berhasil');
    }

    public function pendidikan_edit($id)
    {
        $pendidikan = Pendidikan::find(decrypt($id));

        $wilayah = new Wilayah();
        $provinsi = $wilayah->provinsi();
        $kabupaten = $wilayah->kabupaten($pendidikan->kabupaten);
        return view('pages.akun.profile.pendidikan_edit', compact('provinsi', 'kabupaten', 'pendidikan'));
    }

    public function pendidikan_update(Request $request, $id)
    {
        $request->validate([
            "bulan_mulai" => "required",
            "tahun_mulai" => "required",
            "bulan_selesai" => $request->masih_sekolah ? '' : 'required',
            "tahun_selesai" => $request->masih_sekolah ? '' : 'required',
            "nama_sekolah" => "required",
            "provinsi" => "required",
            "kabupaten" => "required",
            "jenjang_pendidikan" => "required",
            "jurusan" => "required",
            "nilai_akhir" => "required"
        ]);

        $pendidikan = Pendidikan::find(decrypt($id));

        $data = $request->all();
        $data['masih_sekolah'] = $request->masih_sekolah
            ? $request->masih_sekolah : 0;

        $data['bulan_selesai'] = $request->masih_sekolah
            ? '' : $request->bulan_selesai;
        $data['tahun_selesai'] = $request->masih_sekolah
            ? '' : $request->tahun_selesai;

        $pendidikan->fill($data);
        $pendidikan->save();

        return redirect()->route('akun.profile.pendidikan')
            ->with('success', 'Perubahan data pendidikan berhasil');
    }

    public function pendidikan_destroy($id)
    {
        $pendidikan = Pendidikan::find(decrypt($id));
        $pendidikan->delete();

        return redirect()->route('akun.profile.pendidikan')
            ->with('success', 'Penghapusan data pendidikan berhasil');
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
