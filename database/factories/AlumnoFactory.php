<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noCtrl' => fake()->unique()->randomNumber(8, true),
            'nombreAlumno' => fake()->unique()->name(),
            'apellidoPaterno' => fake()->unique()->lastName(),
            'apellidoMaterno' => fake()->unique()->lastname(),
            'email' => fake()->unique()->email(),
            'sexo' => fake()->randomElement(['M', 'F'])
            
        ];
    }
}
