<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kabupaten;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        if (request()->get('type') == 'json') {
            $index = 0;
            $results = [];
            foreach (Mitra::all() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.mitra.index');
    }

    public function create()
    {
        $kabupaten = Kabupaten::orderByRaw('nama_kabupaten', 'acs')->get();
        $data = new Mitra();
        $readonly = "";
        return view('admin.pages.mitra.create', compact('kabupaten', 'data', 'readonly'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mitra' => ['required', 'max:64'],
            'bidang_usaha' => ['required', 'max:64'],
            'lokasi_kabupaten' => ['required', 'max:64'],
            'jenis_badan_usaha' => 'required',

        ]);

        $data = Mitra::create($request->all());
        return redirect()->route('admin.mitra.edit', encrypt($data->id))
            ->with('store-success', 'Proses tambah baru berhasil');
    }

    public function edit($id)
    {
        $kabupaten = Kabupaten::orderByRaw('nama_kabupaten', 'acs')->get();
        $data = Mitra::find(decrypt($id));
        $readonly = "readonly";
        return view('admin.pages.mitra.edit', compact('kabupaten', 'data', 'readonly'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_mitra' => ['required', 'max:64'],
            'bidang_usaha' => ['required', 'max:64'],
            'lokasi_kabupaten' => ['required', 'max:64'],
            'jenis_badan_usaha' => 'required',
        ]);

        $data = Mitra::find(decrypt($id));
        $data->update($request->all());
        return redirect()->back()
            ->with('update-success', 'Proses ubah data berhasil.');
    }

    public function destroy($id)
    {
        $data = Mitra::find(decrypt($id));
        $data->delete();
        return redirect()->route('admin.mitra.index')
            ->with('destroy-success', 'Proses hapus data berhasil.');
    }

    public function bulk_destroy()
    {
        $mitras = json_decode(request()->mitras);
        foreach ($mitras as $mitra) {
            $data = Mitra::find($mitra->id);
            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy-success', 'Proses hapus masal berhasil.');
    }
}
