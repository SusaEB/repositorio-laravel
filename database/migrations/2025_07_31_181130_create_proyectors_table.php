<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proyectores', function (Blueprint $table) {
            $table->id();

            // Tu lógica de relación (¡perfecta!)
            // 'nullable()' permite tener proyectores "en depósito" sin aula asignada
            $table->foreignId('aula_id')
                  ->nullable()
                  ->constrained('aulas')
                  ->onDelete('set null'); // Si se borra el aula, el proyector queda "sin asignar"

            // Mi sugerencia de separar marca y modelo
            $table->string('marca');
            $table->string('modelo');

            // Tus campos (¡muy buenos!)
            $table->string('estado')->default('funcional'); // Ej: funcional, roto, en reparacion
            $table->boolean('tiene_hdmi')->default(true);
            $table->string('numero_serie')->unique(); // ¡Casi me olvido! El N° de serie sí debe ir

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('proyectores');
    }
};
