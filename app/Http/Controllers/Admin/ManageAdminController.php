<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class ManageAdminController extends Controller
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
            foreach (Admin::all() as $item) {
                $results[$index] = $item;
                $results[$index]["encryptid"] = encrypt($item->id);
                $index++;
            }
            return response()->json($results);
        }
        return view('admin.pages.manage-admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.manage-admin.create');
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
            "nama" => "required",
            "username" => "required|unique:bpg1_admin",
            "email" => "required|email|unique:bpg1_admin",
            "password" => "required|min:6|confirmed"
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $result = Admin::create($data);
        return redirect()->route('admin.manage-admin.edit', encrypt($result->id))
            ->with('store-success', 'Proses tambah baru admin berhasil.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Admin::find(decrypt($id));
        return view('admin.pages.manage-admin.edit', compact('data'));
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
            "nama" => "required",
            "username" => "required|unique:bpg1_admin,username," . decrypt($id),
            "email" => "required|email|unique:bpg1_admin,email," . decrypt($id)
        ]);

        $data = $request->all();
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data = Arr::except($data, array('password'));
        }

        $admin = Admin::find(decrypt($id));
        $admin->update($data);

        return redirect()->back()
            ->with('update-success', 'Proses ubah data admin berhasil.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find(decrypt($id));
        $admin->delete();
        return redirect()->route('admin.manage-admin.index')
            ->with('destroy-success', 'Proses hapus data admin berhasil.');
    }

    /**
     * Remove the resource selected from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bulk_destroy()
    {
        $admins = json_decode(request()->admins);
        foreach ($admins as $admin) {
            $data = Admin::find($admin->id);
            $data->delete();
        }
        return redirect()->back()
            ->with('bulk-destroy-success', 'Proses hapus masal admin berhasil.');
    }
}
