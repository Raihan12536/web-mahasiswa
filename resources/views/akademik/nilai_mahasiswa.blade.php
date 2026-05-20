<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa Jurusan TI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Nilai Mahasiswa</h2>
        <div class="col-md-6">

            @switch($total_nilai)
                @case(0)
                    <div class="alert alert-danger">Sangat Jelek</div>
                    @break
                @case(70)
                    <div class="alert alert-primary">Memuaskan</div>
                    @break
                @case(100)
                    <div class="alert alert-success">Sangat Memuaskan</div>
                    @break
                @default
                    <div class="alert alert-warning">Nilai tidak valid!</div>
            @endswitch

            <table class="table table-bordered table-striped">
                <tr class="text-md-center">
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Total Nilai</th>
                </tr>
                <tr>
                    <td>{{ $nama }}</td>
                    <td>{{ $nim }}</td>
                    <td>{{ $total_nilai }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>