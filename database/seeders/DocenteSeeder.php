<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Si tienes contraseñas

class DocenteSeeder extends Seeder
{
    public function run()
    {
        DB::table('docentes')->insert([
            [
                'nombre' => 'María',
                'apellido' => 'Gómez',
                'email' => 'maria.gomez@aula.com',
                'especialidad' => 'Matemáticas',
                // Otros campos necesarios (ej: password, si tu modelo Docente lo requiere)
                // 'password' => Hash::make('password123'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Pérez',
                'email' => 'carlos.perez@aula.com',
                'especialidad' => 'Lenguaje',
                // 'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}