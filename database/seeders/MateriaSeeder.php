<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importamos el Facade de DB

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Esta es la lista que me pediste
        $materias = [
            ['nombre' => 'Invernadero'],
            ['nombre' => 'Laboratorio'],
            ['nombre' => 'Maker'],
            ['nombre' => 'Informatica'],
            ['nombre' => 'Artistica'],
            ['nombre' => 'Sociales'],
            ['nombre' => 'Letras'],
            ['nombre' => 'Lengua Extrangera'],
            ['nombre' => 'Exactas'],
        ];

        // Insertamos la lista en la tabla 'materias'
        DB::table('materias')->insert($materias);
    }
}