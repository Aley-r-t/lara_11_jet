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
        Schema::create('detalle_de_reservas', function (Blueprint $table) {
            $table->id()->primary()->unique()->autoIncrement();
            $table->foreignId('alquiler_id')->constrained('alquileres', 'id');
            $table->foreignId('reserva_id')->constrained('reservas', 'id');
            $table->double('monto');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_de_reservas');
    }
};
