@extends('layouts.main')

@section('title', 'Home - Akademik')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang di Sistem Akademik</h1>
        <p class="col-md-8 fs-4">Sistem informasi akademik ini digunakan untuk mengelola data mahasiswa, dosen, dan program studi secara efisien dan mudah. Silakan navigasi melalui menu di atas untuk mulai mengelola data.</p>
        <a href="/mahasiswa" class="btn btn-primary btn-lg" type="button">Lihat Data Mahasiswa</a>
    </div>
</div>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>Data Mahasiswa</h2>
            <p>Kelola data mahasiswa termasuk penambahan, perubahan, dan penghapusan data secara terstruktur sesuai dengan data di program studi masing-masing.</p>
            <a href="/mahasiswa-create" class="btn btn-outline-light" type="button">Tambah Mahasiswa Baru</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2>Data Dosen</h2>
            <p>Sistem ini juga mendukung pengelolaan data dosen pengajar pada berbagai program studi. Data ini terintegrasi dengan jadwal dan mahasiswa bimbingan.</p>
            <a href="/dosen" class="btn btn-outline-secondary" type="button">Lihat Data Dosen</a>
        </div>
    </div>
</div>
@endsection