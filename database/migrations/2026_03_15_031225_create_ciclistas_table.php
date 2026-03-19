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
        Schema::create('ciclistas', function (Blueprint $table) {
            $table->id('id_ciclistas');
            $table->unsignedBigInteger('id_equipo');
            $table->string('nombre',50);
            $table->string('nacionalidad',50);
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciclistas');
    }
};
