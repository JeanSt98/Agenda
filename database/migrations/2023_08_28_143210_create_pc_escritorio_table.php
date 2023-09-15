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
        Schema::create('pc_escritorio', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('Responsable');
            $table->string('Departamento');
            $table->string('Equipo');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Serie_PC');
            $table->string('Monitor');
            $table->string('Serie_Monitor');
            $table->string('Procesador');
            $table->string('Tarjeta_Madre');
            $table->string('Memoria_Ram');
            $table->string('Disco_Duro');
            $table->string('Unidad_Optica');
            $table->string('Sistema_Operativo');
            $table->string('Ip')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pc_escritorio');
    }
};
