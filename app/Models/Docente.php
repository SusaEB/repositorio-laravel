<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    // LISTA DE CAMPOS PERMITIDOS PARA ASIGNACIÓN MASIVA
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'especialidad',
    ];
}
