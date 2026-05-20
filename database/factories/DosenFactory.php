<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    public function definition(): array
{
    return [
        'nidn' => $this->faker->unique()->numerify('##########'),
        'nama_lengkap' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'prodi' => $this->faker->randomElement(['MI', 'TI', 'SI']),
        'no_hp' => $this->faker->phoneNumber(),
    ];
}
}