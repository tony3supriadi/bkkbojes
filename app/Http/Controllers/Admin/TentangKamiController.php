<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->get('type') == "json") {
            $index = 0;
            $results = [];
            foreach (TentangKami::orderBy('urutan', 'ASC')->get() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.tentang-kami.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tentang-kami.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tentang_kami' => 'required',
            'deskripsi_tentang_kami' => 'required'
        ]);

        $data = TentangKami::create($request->all());
        return redirect()->route('admin.tentang-kami.edit', encrypt($data->id))
            ->with('store-success', 'Proses tambah baru tentang kami berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TentangKami::find(decrypt($id));
        return view('admin.pages.tentang-kami.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tentang_kami' => 'required',
            'deskripsi_tentang_kami' => 'required'
        ]);

        $data = TentangKami::find(decrypt($id));
        $data->update($request->all());
        return redirect()->back()
            ->with('update-success', 'Proses ubah data tentang kami berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TentangKami::find(decrypt($id));
        $data->delete();
        return redirect()->route('admin.tentang-kami.index')
            ->with('destroy-success', 'Proses hapus data admin berhasil.');
    }

    public function bulk_destroy()
    {
        $tentangs = json_decode(request()->tentangs);
        foreach ($tentangs as $tentang) {
            $data = TentangKami::find($tentang->id);
            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy', 'Proses hapus masal tentang kami berhasil.');
    }
}
