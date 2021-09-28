<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    public function index()
    {
        if (request()->get('type') == "json") {
            $index = 0;
            $results = [];
            foreach (Link::all() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.link.index');
    }

    public function create()
    {
        return view('admin.pages.link.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'logo' => 'image|file|max:1024',
            'link' => 'required'
        ]);

        if($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('post-images/link', $filenameSimpan);
        }else{
            $filenameSimpan = 'noimage';
        }

        $attributes = $request->all();
        $attributes['logo'] = $filenameSimpan;

        $data = Link::create($attributes);
        return redirect()->route('admin.link.edit', encrypt($data->id))
            ->with('store-success', 'Proses tambah baru link berhasil');
    }

    public function edit($id)
    {
        $data = Link::find(decrypt($id));
        return view('admin.pages.link.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Link::find(decrypt($id));

        $this->validate($request, [
            'nama' => 'required',
            'logo' => 'image|file|max:1024',
            'link' => 'required'
        ]);

        $attributes = $request->all();

        if (!empty($attributes['logo'])) {
            if($request->oldImage){
                Storage::delete('post-images/link/'.$request->oldImage);
            }

            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo')->storeAs('post-images/link', $filenameSimpan);
        } else {
            $filenameSimpan = $data->logo;
        }



        $attributes['logo'] = $filenameSimpan;
        //dd($attributes);

        $data->update($attributes);
        return redirect()->back()
            ->with('update-success', 'Proses ubah data link berhasil.');
    }

    public function destroy($id)
    {
        $data = Link::find(decrypt($id));

        if($data->logo){
            Storage::delete('post-images/link/'.$data->logo);
        }

        $data->delete();
        return redirect()->route('admin.link.index')
            ->with('destroy-success', 'Proses hapus data link berhasil.');
    }

    public function bulk_destroy()
    {
        $links = json_decode(request()->links);
        foreach ($links as $link) {
            $data = Link::find($link->id);

            if($data->logo){
                Storage::delete('post-images/link/'.$data->logo);
            }

            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy-success', 'Proses hapus masal link berhasil.');
    }
}
