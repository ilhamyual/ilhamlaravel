<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendidikan;

class PendidikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('backend.pendidikan.index',compact('pendidikan'));
    }
    public function create()
    {
        return view('backend.pendidikan.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        pendidikan::create([
            'nama' => $request->nama,
            'tingkatan' => $request->tingkatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar,
        ]);

        return redirect()->route('pendidikan.index')
                        -> with('success','Data Pendidikan Baru Berhasil Disimpan');
    }
    public function edit(pendidikan $pendidikan)
    {
        return view('backend.pendidikan.create', compact('pendidikan'));
    }
    public function update(request $request, pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')
                        ->with('success','pendidikan berhasil diperbaharui.');
    }
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')
                        ->with('success','Data Pendidikan berhasil dihapus');
    }
}
