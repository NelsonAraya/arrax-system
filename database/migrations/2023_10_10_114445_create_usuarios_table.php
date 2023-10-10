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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->char('dv', 1);
            $table->string('password', 60)->nullable();
            $table->string('nombres', 50)->nullable();
            $table->string('apellidop', 20)->nullable();
            $table->string('apellidom', 20)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('email', 50)->nullable()->unique();
            $table->string('telefono', 30)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->integer('cia_id')->unsigned()->nullable();
            $table->integer('cargo_id')->unsigned()->nullable();
            $table->integer('sanguineo_id')->unsigned()->nullable();
            $table->date('fecha_de_ingreso')->nullable();
            $table->enum('login_autorizado', ['S', 'N'])->default('S');
            $table->enum('estado', ['A', 'I'])->default('A');
            $table->enum('operativo', ['S', 'N'])->default('N');

            $table->foreign('cia_id')->references('id')->on('cias');
            $table->foreign('cargo_id')->references('id')->on('cargos');
            $table->foreign('sanguineo_id')->references('id')->on('sanguineos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
