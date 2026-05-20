<!DOCTYPE html>
<html lang="id">
<head>
    <title>Profil Simpel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    {{-- Deklarasi Data di PHP Mode --}}
    @php
        $nama = "Nabilla Fitricia Hernanda";
        $hobi = "Dance & Traveling";
        $status = "Mahasiswa Aktif";
    @endphp

    <div class="container border-start border-primary border-4 ps-4">
        <h2 class="text-primary">Profil Singkat</h2>
        <hr>
        
        {{-- Menampilkan Data --}}
        <p>Nama Lengkap : <strong>{{ $nama }}</strong></p>
        <p>Hobi : <strong>{{ $hobi }}</strong></p>
        <p>Status : <span class="badge bg-info text-dark">{{ $status }}</span></p>

        {{-- Komentar Blade: Bagian penutup --}}
        <p class="text-muted mt-4 italic">Update terakhir : {{ date('d M Y') }}</p>
    </div>

</body>
</html>