<?php

namespace Database\Factories;

use App\Models\Dokter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dokter::class;
    public function definition(): array
    {
        return [
            'Dokter' => $this->faker->randomElement(['Dr alex', 'Dr taka', 'Dr alu', 'dr puh']),
        ];
    }
}
