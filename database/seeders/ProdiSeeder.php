<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        Prodi::create([
            'kode_prodi' => 'MI',
            'nama_prodi' => 'Manajemen Informatika',
            'kaprodi' => 'Budi Santoso'
        ]);

        Prodi::create([
            'kode_prodi' => 'TRPL',
            'nama_prodi' => 'Teknologi Rekayasa Perangkat Lunak',
            'kaprodi' => 'Siti Aminah'
        ]);

        Prodi::create([
            'kode_prodi' => 'TK',
            'nama_prodi' => 'Teknik Komputer',
            'kaprodi' => 'Andi Saputra'
        ]);
    }
}