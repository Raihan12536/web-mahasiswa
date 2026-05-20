<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::paginate(10);
        return view('akademik.mahasiswa', compact('mahasiswas'));
    }

    public function create()
    {
        return view('akademik.tambah');
    }

    public function store(Request $request)
    {
        // VALIDASI
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|unique:mahasiswas,email',
            'no_hp' => 'required|numeric',
            'prodi' => 'required',
            'ipk' => 'required|numeric'
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'prodi' => $request->prodi,
            'ipk' => $request->ipk,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('akademik.edit', compact('mhs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
            'prodi' => 'required',
            'ipk' => 'required|numeric'
        ]);

        $mhs = Mahasiswa::findOrFail($id);

        $mhs->update([
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'prodi' => $request->prodi,
            'ipk' => $request->ipk,
            'alamat' => $request->alamat
        ]);

        return redirect('/mahasiswa')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('/mahasiswa')->with('success', 'Data berhasil dihapus');
    }
}