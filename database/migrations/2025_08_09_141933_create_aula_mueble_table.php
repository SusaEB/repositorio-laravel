<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // ¡Esto debe crear la tabla 'aula_mueble', NO 'aulas'!
        Schema::create('aula_mueble', function (Blueprint $table) {
            $table->id();

            // Llave foránea para la tabla 'aulas'
            $table->foreignId('aula_id')
                  ->constrained('aulas')
                  ->onDelete('cascade'); // Si se borra un aula, se borra la relación

            // Llave foránea para la tabla 'muebles'
            $table->foreignId('mueble_id')
                  ->constrained('muebles')
                  ->onDelete('cascade'); // Si se borra un mueble, se borra la relación

            // Opcional: puedes agregar una columna de 'cantidad'
            // $table->integer('cantidad')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aula_mueble');
    }
};