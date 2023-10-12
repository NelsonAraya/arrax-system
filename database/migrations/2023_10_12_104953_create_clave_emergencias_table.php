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
        Schema::create('clave_emergencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave',10)->unique();
            $table->string('descripcion')->nullable();
            $table->enum('estado',['A','I'])->default('A');
            $table->enum('tipo',['A','B'])->default('A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clave_emergencias');
    }
};
