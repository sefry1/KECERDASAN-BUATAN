<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('penyakits.index', compact('penyakits'));
    }

    public function create()
    {
        return view('penyakits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:penyakits',
            'nama_penyakit' => 'required',
            'gejala' => 'required',
            'status' => 'required|in:Active,Inactive',
        ]);

        Penyakit::create($request->all());
        return redirect()->route('penyakits.index')->with('success', 'Penyakit berhasil ditambahkan');
    }

    public function edit(Penyakit $penyakit)
    {
        return view('penyakits.edit', compact('penyakit'));
    }

    public function update(Request $request, Penyakit $penyakit)
    {
        $request->validate([
            'kode' => 'required|unique:penyakits,kode,' . $penyakit->id,
            'nama_penyakit' => 'required',
            'gejala' => 'required',
            'status' => 'required|in:Active,Inactive',
        ]);

        $penyakit->update($request->all());
        return redirect()->route('penyakits.index')->with('success', 'Penyakit berhasil diperbarui');
    }

    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();
        return redirect()->route('penyakits.index')->with('success', 'Penyakit berhasil dihapus');
    }
}