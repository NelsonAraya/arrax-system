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
        Schema::create('bitacora_material_mayors', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_salida');
            $table->date('fecha_llegada');
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->integer('kmsalida');
            $table->integer('kmllegada');
            $table->integer('material_mayor_id')->unsigned();
            $table->foreign('material_mayor_id')->references('id')->on('material_mayors');
            $table->integer('conductor_id');
            $table->foreign('conductor_id')->references('id')->on('usuarios');
            $table->integer('obac_id')->nullable();
            $table->foreign('obac_id')->references('id')->on('usuarios');
            $table->integer('registrador_id')->nullable();
            $table->foreign('registrador_id')->references('id')->on('usuarios');
            $table->string('servicio',10);
            $table->string('direccion',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacora_material_mayors');
    }
};
