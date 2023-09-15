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
        Schema::create('escaner_distrito', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('Responsable');
            $table->string('Departamento');
            $table->string('Equipo');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Serie_Escaner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escaner_distrito');
    }
};
