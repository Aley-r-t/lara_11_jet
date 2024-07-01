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
        Schema::create('tipos', function (Blueprint $table) {
            $table->id()->primary()->unique()->autoIncrement();
            $table->string('tipo', length: 2);
            $table->integer('total_espacio');
            $table->double('ancho');
            $table->double('largo');
            $table->double('peso_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
