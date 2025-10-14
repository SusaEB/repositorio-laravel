<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    // Campos que se pueden llenar desde un formulario
    protected $fillable = [
        'nombre',
        'especialidad',
        'dni',
    ];
}
