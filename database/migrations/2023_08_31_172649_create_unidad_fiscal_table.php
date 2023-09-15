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
        Schema::create('unidad_fiscal', function (Blueprint $table) {
            $table->id();
            $table->string('AMIE')->unique();
            $table->string('Nombre_Institucion');
            $table->string('Sostenimiento');
            $table->string('Parroquia');
            $table->string('Direccion');
            $table->string('Distrito');
            $table->string('Circuito');
            $table->string('Nombre_de_la_Autoridad');
            $table->string('Cedula_de_la_Autoridad');
            $table->integer('Celular');
            $table->string('Correo_Institucional');
            $table->string('Telefono_Rectorado');
            $table->string('Email_Institucion');
            $table->string('Jornada');
            $table->integer('Total_Estudiantes');
            $table->integer('Total_Docentes_Institucion');
            $table->string('Nivel_que_oferta');
            $table->string('Tipo_de_educacion');
            $table->string('Jornadas');
            $table->string('Coordenadas_x');
            $table->string('Coordenadas_y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidad_fiscal');
    }
};
