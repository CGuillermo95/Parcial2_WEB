<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'Nombres',
        'Apellidos',
        'Telefono',
        'Correo',
        'Direccion',
        'NIT',
    ];
}