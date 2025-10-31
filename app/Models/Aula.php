<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    /**
     * Los campos que se pueden llenar.
     */
    protected $fillable = [
        'nombre',
        'capacidad',
        'ubicacion',
    ];
}