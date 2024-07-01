<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'cliente_id',
        'espacio_id',
        'user_id',
        'peso_container',
        'fecha_inicio',
        'fecha_fin',
    ];
}
