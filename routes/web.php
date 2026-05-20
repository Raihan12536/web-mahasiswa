<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;




Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});



Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Ketua HIMA TI adalah $nama";
});

Route::get('/mahasiswa/{nama}/{nim}', function ($nama, $nim) {
    return "Ketua HIMA TI adalah $nama, dengan NIM: $nim";
});

Route::get('/dosen-param/{nama?}/{nip?}', function ($nama = "", $nip = "") {
    return "Dosen: $nama, NIP: $nip";
});



Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);

Route::get('/dosen', [DosenController::class, 'index']);
    
Route::get('/prodi', [ProdiController::class, 'index']);

Route::get('/insert-sql', [MahasiswaController::class, 'insertSql']);
Route::get('/insert-prepared', [MahasiswaController::class, 'insertPrepared']);
Route::get('/insert-binding', [MahasiswaController::class, 'insertBinding']);
Route::get('/select-view', [MahasiswaController::class, 'selectView']);
Route::get('/select-where', [MahasiswaController::class, 'selectWhere']);
Route::get('/statement', [MahasiswaController::class, 'statement']);



Route::fallback(function () {
    return '<h2>Halaman Tidak Ditemukan</h2>';
});