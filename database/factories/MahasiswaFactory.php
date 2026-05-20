<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numerify('##########'),
            'nama_lengkap' => fake()->name(),
            'tempat_lahir' => fake()->city(),
            'tgl_lahir' => fake()->date(),
            'email' => fake()->unique()->safeEmail(),
            'prodi' => fake()->randomElement(['MI', 'TI', 'SI']),
            'ipk' => fake()->randomFloat(2, 2, 4),
            'alamat' => fake()->address(),
        ];
    }
}