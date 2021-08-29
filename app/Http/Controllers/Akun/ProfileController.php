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
use Illuminate\Support\Arr;
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
        $request->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|unique:fdf1_personal,no_hp,' . decrypt($id),
            'email' => 'required|email|unique:fdf1_personal,email,' . decrypt($id),
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kodepos' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        $data = $request->all();
        if (empty($data['photo'])) {
            $data = Arr::except($data, array('photo'));
        }

        $personal = Personal::find(decrypt($id));
        $personal->fill($data);
        $personal->save();

        return redirect()->route('akun.profile.personal')
            ->with('success', 'Data informasi personal berhasil di ubah.');
    }

    public function pengalaman()
    {
        $id = Auth::guard('personal')->user()->id;
        $pengalaman = Pengalaman::where('personal_id', '=', $id)->orderBy('tanggal_mulai', 'DESC')->get();
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
            "bidang_usaha" => "required",
            "alamat" => "required",
            "provinsi" => "required",
            "kabupaten" => "required"
        ]);

        Pengalaman::create($request->all());

        return redirect()->route('akun.profile.pengalaman')
            ->with('success', 'Anda berhasil menambahkan pengalaman kerja.');
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
            "bidang_usaha" => "required",
            "alamat" => "required",
            "provinsi" => "required",
            "kabupaten" => "required"
        ]);

        $data = $request->all();
        $data['masih_bekerja'] = 0;

        $pengalaman = Pengalaman::find(decrypt($id));
        $pengalaman->fill($data);
        $pengalaman->save();

        return redirect()->route('akun.profile.pengalaman')
            ->with('success', 'Perubahan data pengalaman kerja berhasil');
    }

    public function pengalaman_destroy($id)
    {
        $pengalaman = Pengalaman::find(decrypt($id));
        $pengalaman->delete();

        return redirect()->route('akun.profile.pengalaman')
            ->with('success', 'Penghapusan pengalaman kerja berhasil');
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

        $mahir = Keterampilan::where('personal_id', '=', $id)->where('prosentase', '=', 100)->count();
        $menengah = Keterampilan::where('personal_id', '=', $id)->where('prosentase', '=', 75)->count();
        $pemula = Keterampilan::where('personal_id', '=', $id)->where('prosentase', '=', 60)->count();

        return view('pages.akun.profile.keterampilan', compact('keterampilan', 'mahir', 'menengah', 'pemula'));
    }

    public function keterampilan_edit()
    {
        $id = Auth::guard('personal')->user()->id;
        $keterampilan = Keterampilan::where('personal_id', '=', $id)->get();

        if (request()->get('type') == 'json') {
            return response()->json($keterampilan);
        }

        return view('pages.akun.profile.keterampilan_edit', compact('keterampilan'));
    }

    public function keterampilan_update(Request $request)
    {
        Keterampilan::where('personal_id', '=', $request->personal_id)->delete();

        $data = $request->all();
        foreach ($data['keterampilan'] as $item) {
            Keterampilan::create([
                "personal_id" => $data["personal_id"],
                "skill" => $item["skill"],
                "prosentase" => $item["prosentase"]
            ]);
        }

        return redirect()
            ->route('akun.profile.keterampilan');
    }

    public function organisasi()
    {
        $id = Auth::guard('personal')->user()->id;
        $organisasi = Organisasi::where('personal_id', '=', $id)->get();

        return view('pages.akun.profile.organisasi', compact('organisasi'));
    }

    public function organisasi_create()
    {
        return view('pages.akun.profile.organisasi_create');
    }

    public function organisasi_store(Request $request)
    {
        $request->validate([
            'tahun_mulai' => 'required|numeric',
            'tahun_berakhir' => $request->masih_aktif ? '' : 'required|numeric',
            'nama_organisasi' => 'required',
            'posisi_jabatan' => 'required'
        ]);

        Organisasi::create($request->all());
        return redirect()->route('akun.profile.organisasi')
            ->with('success', 'Penamabahan data organisasi berhasil');
    }

    public function organisasi_edit($id)
    {
        $organisasi = Organisasi::find(decrypt($id));
        return view('pages.akun.profile.organisasi_edit', compact('organisasi'));
    }

    public function organisasi_update(Request $request, $id)
    {
        $request->validate([
            'tahun_mulai' => 'required|numeric',
            'tahun_berakhir' => $request->masih_aktif ? '' : 'required|numeric',
            'nama_organisasi' => 'required',
            'posisi_jabatan' => 'required'
        ]);

        $organisasi = Organisasi::find(decrypt($id));

        $data = $request->all();
        $data['masih_aktif'] = $request->masih_aktif ? $request->masih_aktif : 0;

        $organisasi->fill($data);
        $organisasi->save();

        return redirect()->route('akun.profile.organisasi')
            ->with('success', 'Perubahan data organisasi berhasil');
    }

    public function organisasi_destroy($id)
    {
        $organisasi = Organisasi::find(decrypt($id));
        $organisasi->delete();

        return redirect()->route('akun.profile.organisasi')
            ->with('success', 'Penghapusan data organisasi berhasil');
    }
}
