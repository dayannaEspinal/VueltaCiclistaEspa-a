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
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('ciclista_ganardor',50);
            $table->string('clasificacion_final',50);
            $table->integer('numero_etapas');
            $table->date('año_edicion');
            $table->integer('km_totales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas');
    }
};
