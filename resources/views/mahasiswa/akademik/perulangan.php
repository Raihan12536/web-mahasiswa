<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Perulangan Foreach</h2>
    <div class="col-md-6">
        <h4>Nama = {( $nama )}, Nim = {( $nim )}</h4>
        Nilai = 
        @foreach ($total_nilai as $nilai)
        @if ($nilai < 50)
        @break
        @endif
            <div class="alert alert-danger d-inline-block"> {{ $nilai }} </div>
        @endforeach
    </div>
</body>
</html>