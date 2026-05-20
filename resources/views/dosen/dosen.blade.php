@extends('layouts.main')

@section('title', 'Data Dosen')

@section('content')

<h2 class="mb-4">Daftar Dosen Jurusan TI</h2>


<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Prodi</th>
        </tr>
    </thead>

    <tbody>
    @foreach($dosens as $d)
        <tr>
            <td>{{ ($dosens->currentPage()-1)*$dosens->perPage()+$loop->iteration }}</td>
            <td>{{ $d->nidn }}</td>
            <td>{{ $d->nama_lengkap }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->prodi }}</td>

        </tr>
    @endforeach
    </tbody>

</table>

{{ $dosens->links() }}

@endsection