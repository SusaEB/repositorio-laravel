<?php

namespace Database\Seeders;

// 1. Importamos el Modelo (como decían tus notas)
use App\Models\Docente;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Lo dejas si vas a usar contraseñas

class DocenteSeeder extends Seeder
{
    public function run()
    {
        // 2. Usamos el método ::create() del modelo
        Docente::create([
            'nombre' => 'María',
            'apellido' => 'Gómez',
            'email' => 'maria.gomez@aula.com',
            'especialidad' => 'Matemáticas',
            // 'password' => Hash::make('password123'), 
            // ¡Ya no necesitas created_at ni updated_at!
        ]);

        Docente::create([
            'nombre' => 'Carlos',
            'apellido' => 'Pérez',
            'email' => 'carlos.perez@aula.com',
            'especialidad' => 'Lenguaje',
            // 'password' => Hash::make('password123'),
        ]);
    }
}