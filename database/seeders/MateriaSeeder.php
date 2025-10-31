<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia; // <-- ¡Importante agregar esto!

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Borra datos existentes para evitar duplicados
        Materia::truncate();

        // Inserta las materias
        Materia::create(['nombre' => 'Programación I']);
        Materia::create(['nombre' => 'Sistemas Operativos']);
        Materia::create(['nombre' => 'Bases de Datos I']);
        Materia::create(['nombre' => 'Ingeniería de Software']);
        Materia::create(['nombre' => 'Redes de Computadoras']);
    }
}