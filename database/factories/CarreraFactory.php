<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCarrera' => fake()->unique()->randomNumber(2, true),
            'nombreCarrera' => fake()->unique()->name(),
            'nombreMediano' => fake()->unique()->lastName(),
            'nombreCorto' => substr(fake()->unique()->name(), 0, 5),
        ];
    }
}
