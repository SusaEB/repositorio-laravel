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
        Schema::create('aire_acondicionados', function (Blueprint $table) {
            $table->id();

            // La misma lógica de relación que Proyectores
            $table->foreignId('aula_id')
                  ->nullable() // Permite tener AAs "en depósito"
                  ->constrained('aulas')
                  ->onDelete('set null'); // Si se borra el aula, el AA queda "sin asignar"

            // Los datos del INVENTARIO
            $table->string('marca');
            $table->string('modelo');
            $table->integer('btu'); // La potencia (frigorías)
            $table->string('numero_serie')->unique(); // N° de serie único
            $table->string('estado_inventario')->default('funcional'); // 'funcional', 'roto', 'en_reparacion'
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aire_acondicionados');
    }
};