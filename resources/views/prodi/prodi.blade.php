@extends('layouts.main')

@section('title', 'Data Prodi')

@section('content')

<h2 class="mb-4">Daftar Program Studi</h2>

<!-- <a href="/prodi/tambah" class="btn btn-primary mb-3">+ Tambah Data</a> -->

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Prodi</th>
            <th>Kaprodi</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>

    <tbody>
    @foreach($prodis as $p)
        <tr>
            <td>{{ ($prodis->currentPage()-1)*$prodis->perPage()+$loop->iteration }}</td>
            <td>{{ $p->kode_prodi }}</td>
            <td>{{ $p->nama_prodi }}</td>
            <td>{{ $p->kaprodi }}</td>
            <!-- <td>
                <a href="/prodi/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/prodi/delete/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus</a>
            </td> -->
        </tr>
    @endforeach
    </tbody>

</table>

{{ $prodis->links() }}

@endsection