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
        Schema::create('unidad_privada_fiscomisional', function (Blueprint $table) {
            $table->id();
            $table->string('AMIE')->unique();
            $table->string('Nombre_Institucion');
            $table->string('Sostenimiento');
            $table->string('Nivel_que_oferta');
            $table->string('Correo_Institucional');
            $table->string('Correo_Institucional_Alterno');
            $table->string('Direccion');
            $table->string('Parroquia');
            $table->string('Cedula_de_la_Autoridad_P');
            $table->string('Nombre_de_la_Autoridad_P');
            $table->date('Fecha_de_Nacimiento_A_P');
            $table->integer('Celular_A_P');
            $table->integer('Telefono_Convencional_A_P');
            $table->string('Correo_Personal_Autoridad_P');
            $table->string('Direccion_Domicilio');
            $table->integer('Cedula_de_la_Autoridad_S');
            $table->string('Nombre_de_la_Autoridad_S');
            $table->date('Fecha_de_Nacimiento_A_S');
            $table->integer('Celular_A_S');
            $table->integer('Telefono_Convencional_A_S');
            $table->string('Correo_Personal_Autoridad_S');
            $table->string('Direccion_Domicilio_A_S');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidad_privada_fiscomisional');
    }
};
