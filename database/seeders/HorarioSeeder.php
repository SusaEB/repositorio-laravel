<?php

namespace Database\Seeders;

// 1. AQUÍ VAN LAS CLASES QUE "USAMOS"
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horario; // <-- ¡Esta es la importante que hay que agregar!

// 2. AQUÍ EMPIEZA LA CLASE
class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // 3. AQUÍ VA LA LÓGICA
    public function run(): void
    {
        // Borra los horarios existentes para evitar duplicados
        // (Asegúrate de tener 'Horario::' y no 'App\Models\Horario::')
        Horario::truncate(); 

        // Inserta los nuevos horarios
        Horario::create(['hora_inicio' => '07:00:00']);
        Horario::create(['hora_inicio' => '08:25:00']);
        Horario::create(['hora_inicio' => '09:50:00']);
        Horario::create(['hora_inicio' => '11:15:00']);
    }
}