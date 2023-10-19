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
        Schema::create('ficha_medicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->enum('cronico', ['S', 'N'])->default('N');
            $table->double('peso', 8, 2)->nullable();
            $table->double('talla', 8, 2)->nullable();
            $table->double('imc', 8, 2)->nullable();
            $table->string('quirurgicos')->nullable();
            $table->string('alergias')->nullable();
            $table->string('tratamientos')->nullable();
            $table->string('enfermedades')->nullable();
            $table->string('contacto1')->nullable();
            $table->integer('fono1')->nullable();
            $table->string('contacto2')->nullable();
            $table->integer('fono2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ficha_medicas');
    }
};
