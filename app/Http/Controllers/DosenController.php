<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::paginate(10);
        return view('dosen.dosen', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosens,nidn',
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'prodi' => 'required'
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'prodi' => $request->prodi,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/dosen')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nidn' => 'required',
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'prodi' => 'required'
        ]);

        $dosen = Dosen::findOrFail($id);

        $dosen->update([
            'nidn' => $request->nidn,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'prodi' => $request->prodi,
            'no_hp' => $request->no_hp
        ]);

        return redirect('/dosen')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Dosen::destroy($id);
        return redirect('/dosen')->with('success', 'Data berhasil dihapus');
    }
}