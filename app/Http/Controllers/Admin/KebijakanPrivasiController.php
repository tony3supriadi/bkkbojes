<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KebijakanPrivasi;
use Illuminate\Http\Request;

class KebijakanPrivasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->get('type') == 'json') {
            $index = 0;
            $results = [];
            foreach (KebijakanPrivasi::orderBy('urutan', 'ASC')->get() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.kebijakan-privasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.kebijakan-privasi.create");
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
            'nama_kebijakan' => 'required',
            'deskripsi_kebijakan' => 'required'
        ]);

        $data = KebijakanPrivasi::create($request->all());
        return redirect()->route('admin.kebijakan-privasi.edit', encrypt($data->id))
            ->with('store-success', 'Proses tambah baru Kebijakan Privasi berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KebijakanPrivasi::find(decrypt($id));
        return view('admin.pages.kebijakan-privasi.edit', compact('data'));
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
            'nama_kebijakan' => 'required',
            'deskripsi_kebijakan' => 'required'
        ]);

        $data = KebijakanPrivasi::find(decrypt($id));
        $data->update($request->all());
        return redirect()->back()
            ->with('update-success', 'Proses ubah data Kebijakan Privasi berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KebijakanPrivasi::find(decrypt($id));
        $data->delete();
        return redirect()->route('admin.kebijakan-privasi.index')
            ->with('destroy-success', 'Proses hapus data admin berhasil.');
    }

    public function bulk_destroy(Request $request)
    {
        $ids = json_decode($request->ids);
        foreach ($ids as $id) {
            $data = KebijakanPrivasi::find($id->id);
            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy', 'Proses hapus masal tentang kami berhasil.');
    }
}
