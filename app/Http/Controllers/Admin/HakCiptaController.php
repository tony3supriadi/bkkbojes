<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Copyright;
use Illuminate\Http\Request;

class HakCiptaController extends Controller
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
            foreach (Copyright::all() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.hak-cipta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.hak-cipta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'situs_dikelola' => 'required',
            'hak_cipta' => 'required'
        ]);

        $data = Copyright::create($request->all());
        return redirect()->route('admin.hak-cipta.edit', encrypt($data->id))
            ->with('store-success' , 'Proses tambah baru hak cipta berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Copyright::find(decrypt($id));
        return view('admin.pages.hak-cipta.edit', compact('data'));
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
        $this->validate($request,[
            'situs_dikelola' => 'required',
            'hak_cipta' => 'required'
        ]);

        $data = Copyright::find(decrypt($id));
        $data->update($request->all());
        return redirect()->back()
            ->with('update-success', 'Proses ubah data hak cipta berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Copyright::find(decrypt($id));
       $data->delete();
       return redirect()->route('admin.hak-cipta.index')
        ->with('destroy-success', 'Proses hapus data hak cipta berhasil.');
    }

    public function bulk_destroy()
    {
        $copyrights = json_decode(request()->copyrights);
        foreach ($copyrights as $copyright) {
            $data = Copyright::find($copyright->id);
            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy-success', 'Proses hapus masal hak cipta berhasil.');
    }
}
