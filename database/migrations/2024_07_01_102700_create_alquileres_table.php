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
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id()->primary()->unique()->autoIncrement();
            $table->foreignId('cliente_id')->constrained('users', 'id');
            $table->foreignId('maquinaria_id')->constrained('maquinarias', 'id');
            $table->foreignId('espacio_id')->constrained('espacios', 'id');
            $table->double('mora');
            $table->date('fecha_salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquileres');
    }
};
