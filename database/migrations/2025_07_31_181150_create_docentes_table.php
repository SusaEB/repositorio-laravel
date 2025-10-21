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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            
            // AGREGAR ESTAS LÍNEAS PARA DEFINIR LAS COLUMNAS FALTANTES
            $table->string('nombre');
            $table->string('apellido'); // <-- ¡La columna que faltaba!
            $table->string('email')->unique();
            $table->string('especialidad');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};