<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante; // Asegúrate de importar tu modelo
use Faker\Factory as Faker;

class EstudianteSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Crea una instancia de Faker

        for ($i = 0; $i < 10; $i++) {
            Estudiante::create([
                'nombre' => $faker->name, // Nombre aleatorio
                'celular' => $faker->phoneNumber, // Número de celular aleatorio
                'correo' => $faker->unique()->safeEmail, // Correo electrónico único
                'programa' => $faker->word, // Programa aleatorio
            ]);
        }
    }
}
