<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Depto;
use App\Models\Carrera;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeptoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depto:: factory(15)
        ->has(Carrera::factory(4)
            ->has(Alumno::factory(5)))
        ->create();
    }
}
