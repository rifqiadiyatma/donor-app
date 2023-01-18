<?php

namespace App\Http\Controllers;

use App\Models\Kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index()
    {
        $kabupaten = Kabupaten::orderBy('id_kab', 'desc')->get();
        $data = [
            'kabupaten' => $kabupaten,
        ];
        return view('kabupaten.index', $data);
    }

    public function tambah()
    {
        return view('kabupaten.tambah');
    }

    public function simpan(Request $request)
    {
        $validateData = $request->validate([
            'nama_kab' => 'required',
        ]);
        
        Kabupaten::create($validateData);

        return redirect('kabupaten')->with('success', 'data berhasil disimpan');
    }

    public function edit($id_kab)
    {   
        $kabupaten = Kabupaten::findOrFail($id_kab);
        $data = [
            'kabupaten' => $kabupaten,
        ];
        return view('kabupaten.edit', $data);
    }

    public function update($id_kab, Request $request)
    {
        $validateData = $request->validate([
            'nama_kab' => 'required',
        ]);

        Kabupaten::where('id_kab', $id_kab)->update($validateData);

        return redirect('kabupaten')->with('success', 'data berhasil di update');
    }

    public function delete($id_kab)
    {
        Kabupaten::where('id_kab', $id_kab)->delete();

        return redirect('kabupaten')->with('success', 'data berhasil di hapus');
    }
}
