<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maquinarias extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'placa',
        'maquinista',
    ];


}
