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
        Schema::create('activacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->integer('material_mayor_id')->unsigned();
            $table->foreign('material_mayor_id')->references('id')->on('material_mayors');
            $table->enum('estado',['A','I']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activacions');
    }
};
