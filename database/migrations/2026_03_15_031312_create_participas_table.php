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
        Schema::create('participas', function (Blueprint $table) {
            $table->id('id_participa');
            $table->unsignedBigInteger('id_equipo');
            $table->unsignedBigInteger('id_prueba');
            $table->date('fecha_inicio');
            $table->date('fin_contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participas');
    }
};
