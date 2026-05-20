@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')

<h2 class="mb-4">Daftar Mahasiswa Jurusan TI</h2>

<a href="/mahasiswa/tambah" class="btn btn-primary mb-3">+ Tambah Data</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>IPK</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    @foreach($mahasiswas as $mhs)
        <tr>
            <td>{{ ($mahasiswas->currentPage()-1)*$mahasiswas->perPage()+$loop->iteration }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama_lengkap }}</td>
            <td>{{ $mhs->prodi }}</td>
            <td>{{ $mhs->ipk }}</td>
            <td>
                <a href="/mahasiswa/edit/{{ $mhs->id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/mahasiswa/delete/{{ $mhs->id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

{{ $mahasiswas->links() }}

@endsection