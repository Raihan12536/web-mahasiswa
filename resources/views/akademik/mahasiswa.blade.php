@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Mahasiswa Jurusan TI</h1>
        <a href="/mahasiswa-create" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>IPK</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama_lengkap }}</td> 
                <td>{{ $mahasiswa->ipk }}</td>  
                <td>{{ $mahasiswa->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection