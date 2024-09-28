<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crea 10 usuarios de prueba usando la factory
        User::factory(10)->create();

        // Llama al seeder de estudiantes
        $this->call(EstudianteSeeder::class); // Llama al seeder para estudiantes
        $this->call(DocenteSeeder::class); // Llama al seeder para estudiantes
    }
}
