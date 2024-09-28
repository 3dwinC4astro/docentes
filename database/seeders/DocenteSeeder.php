<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DocenteSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); // Crea una instancia de Faker

        for ($i = 0; $i < 10; $i++) {
            Docente::create([
                'nombre' => $faker->name, // Nombre aleatorio
                'programa' => $faker->word, // Número de celular aleatorio
                'correo' => $faker->unique()->safeEmail, // Correo electrónico único
                'celular' => $faker->phoneNumber, // Programa aleatorio
                'universidad' => $faker->word, // Programa aleatorio
            ]);
        }
    }
}