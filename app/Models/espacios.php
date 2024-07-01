<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class espacios extends Model
{
    use HasFactory;

    protected $table = 'espacios';

    protected $fillable = [
        'estado',
        'tipo_id',
    ];
}
