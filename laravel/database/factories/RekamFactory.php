<?php

namespace Database\Factories;

use App\Models\Rekam;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekam>
 */
class RekamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Rekam::class;
    public function definition(): array
    {
        return [
            'Dokter' => $this->faker->randomElement(['Dr alex', 'Dr taka', 'Dr alu', 'dr puh']),
            'Pasien' => $this->faker->randomElement(['alis', 'Atuh']),
            'Keterangan' => $this->faker->randomElement(['Panas', 'mual', 'ngantuk', 'epilepsi']),
            'Penyakit' => $this->faker->randomElement(['diabetes', 'cacar', 'kurang tidur']),
            'Suhu' => $this->faker->numberBetween(25, 43),
            'Image' => 'required|image|mimes:jpeg,png,jpg,pdf',
        ];

        return [
            'Dokter' => $this->faker->name,
            'Pasien' => $this->faker->name,
            'Keterangan' => $this->faker->randomElement(['Panas', 'mual', 'ngantuk', 'epilepsi']),
            'Penyakit' => $this->faker->randomElement(['diabetes', 'cacar', 'kurang tidur']),
            'Suhu' => $this->faker->numberBetween(25, 43),
            'Image' => 'required|image|mimes:jpeg,png,jpg,pdf',
        ];
    }
}
