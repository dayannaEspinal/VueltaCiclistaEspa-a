<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasColumn('pruebas', 'ciclista_ganardor') && !Schema::hasColumn('pruebas', 'ciclista_ganador')) {
            DB::statement('ALTER TABLE pruebas CHANGE ciclista_ganardor ciclista_ganador VARCHAR(50) NOT NULL');
        }

        if (Schema::hasColumn('pruebas', 'año_edicion') && !Schema::hasColumn('pruebas', 'anio_edicion')) {
            Schema::table('pruebas', function (Blueprint $table) {
                $table->integer('anio_edicion')->nullable()->after('numero_etapas');
            });

            DB::statement('UPDATE pruebas SET anio_edicion = YEAR(`año_edicion`) WHERE `año_edicion` IS NOT NULL');

            Schema::table('pruebas', function (Blueprint $table) {
                $table->integer('anio_edicion')->nullable(false)->change();
            });

            DB::statement('ALTER TABLE pruebas DROP COLUMN `año_edicion`');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('pruebas', 'ciclista_ganador') && !Schema::hasColumn('pruebas', 'ciclista_ganardor')) {
            DB::statement('ALTER TABLE pruebas CHANGE ciclista_ganador ciclista_ganardor VARCHAR(50) NOT NULL');
        }

        if (Schema::hasColumn('pruebas', 'anio_edicion') && !Schema::hasColumn('pruebas', 'año_edicion')) {
            Schema::table('pruebas', function (Blueprint $table) {
                $table->date('año_edicion')->nullable()->after('numero_etapas');
            });

            DB::statement("UPDATE pruebas SET `año_edicion` = STR_TO_DATE(CONCAT(anio_edicion, '-01-01'), '%Y-%m-%d') WHERE anio_edicion IS NOT NULL");

            Schema::table('pruebas', function (Blueprint $table) {
                $table->date('año_edicion')->nullable(false)->change();
            });

            Schema::table('pruebas', function (Blueprint $table) {
                $table->dropColumn('anio_edicion');
            });
        }
    }
};
