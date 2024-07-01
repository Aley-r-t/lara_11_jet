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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id()->primary()->unique()->autoIncrement();
            $table->foreignId('cliente_id')->constrained('users', 'id');
            $table->foreignId('espacio_id')->constrained('espacios', 'id');
            $table->foreignId('user_id')->constrained('admins', 'id')->nullable();
            $table->double('peso_container');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
