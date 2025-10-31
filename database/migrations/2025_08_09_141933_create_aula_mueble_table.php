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
        // ESTO ES LO IMPORTANTE
        Schema::create('aulas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // <-- La columna que falta
            $table->integer('capacidad'); // <-- Esta también
            $table->string('ubicacion')->nullable(); // <-- Y esta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aulas');
    }
};