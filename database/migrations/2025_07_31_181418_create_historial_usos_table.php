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
        // Tu archivo se llama 'historial_usos'
        Schema::create('historial_usos', function (Blueprint $table) {
            $table->id();

            // Conecta con el AA específico que se usó
            $table->foreignId('aire_acondicionado_id')
                  ->constrained('aire_acondicionados')
                  ->onDelete('cascade'); // Si se borra el AA, se borra su historial

            // AQUI VA TU LÓGICA DE CONTROL
            $table->integer('temperatura_seteada');
            $table->string('estado_uso'); // 'encendido', 'apagado'
            
            // Tiempos de uso
            $table->timestamp('encendido_at')->nullable();
            $table->timestamp('apagado_at')->nullable();
            
            // $table->timestamps(); // (Opcional, ya tenemos los de arriba)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_usos');
    }
};