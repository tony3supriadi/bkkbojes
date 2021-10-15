<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
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
            foreach (Faq::orderBy('order', 'ASC')->get() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.faq.create");
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
            'order' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = Faq::create($request->all());
        return redirect()->route('admin.faq.edit', encrypt($data->id))
            ->with('store-success', 'Proses tambah baru FAQ berhasil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Faq::find(decrypt($id));
        return view('admin.pages.faq.edit', compact('data'));
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
            'order' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = Faq::find(decrypt($id));
        $data->update($request->all());
        return redirect()->back()
            ->with('update-success', 'Proses ubah data FAQ berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Faq::find(decrypt($id));
        $data->delete();
        return redirect()->route('admin.faq.index')
            ->with('destroy-success', 'Proses hapus data admin berhasil.');
    }

    public function bulk_destroy()
    {
        $faqs = json_decode(request()->ids);
        foreach ($faqs as $faq) {
            $data = Faq::find($faq->id);
            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy', 'Proses hapus masal tentang kami berhasil.');
    }
}
