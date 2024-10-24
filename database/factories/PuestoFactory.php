<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puesto>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idPuesto' => fake()->numberBetween(10000, 99999),
            'nombre' => fake()->name(),
            'Tipo' => fake()->randomElement(['director', 'docente', 'administrativo']),
        ];
    }
}
