<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->firstName(),
            'npm' => $this->faker->randomNumber(8, true),
            'kelas' => $this->faker->randomNumber(5, true),
            'jurusan' => $this->faker->randomElement(['Sistem Informasi', 'Sistem Komputer']),
            'domisili' => $this->faker->randomElement(['Depok', 'Kalimalang', 'Karawaci', 'Salemba', 'Cengkareng', 'Simatupang']),
            'acara' => $this->faker->randomElement(['Day 1', 'Day 2', 'Both']),
            'email' => $this->faker->safeEmail(),
            'nomorwa' => $this->faker->phoneNumber()
        ];
    }
}
