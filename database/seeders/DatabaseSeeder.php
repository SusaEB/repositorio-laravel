<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Esto crea tu usuario de prueba (¡déjalo!)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // 👇 AGREGA ESTO 👇
        // Esto llama al sembrador de materias que creamos
        $this->call([
            MateriaSeeder::class,
        ]);
    }
}