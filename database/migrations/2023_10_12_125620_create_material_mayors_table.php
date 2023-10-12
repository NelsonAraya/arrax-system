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
        Schema::create('material_mayors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patente',10)->unique();
            $table->string('clave');
            $table->string('modelo');
            $table->string('marca');
            $table->integer('anio');
            $table->integer('cia_id')->unsigned();
            $table->foreign('cia_id')->references('id')->on('cias');
            $table->integer('orden')->nullable();
            $table->enum('estado',['A','I'])->default('A');
            $table->enum('activacion',['S','N'])->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_mayors');
    }
};
