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
     Schema::create('pacientes', function (Blueprint $table) {
        $table->id();
        $table->string('apellido_nombre');
        $table->string('dni', 20);
        $table->integer('edad');
        $table->date('fecha_nacimiento');
        $table->string('domicilio');
        $table->string('celular', 30);
        $table->string('ocupacion');
        $table->string('obra_social');
        $table->string('numero_afiliacion');
        $table->string('profesional_deriva');
        $table->date('fecha_inicio_tratamiento')->nullable();
        $table->date('fecha_cirugia')->nullable();
        $table->text('tto')->nullable();
        $table->integer('sesiones')->default(0);
        $table->text('diagnostico')->nullable();
        $table->string('medico_asignado');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
