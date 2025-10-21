<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 👇 ¡IMPORTANTE! Importa los modelos que vas a usar
use App\Models\Materia; 
use App\Models\Horario;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1. Buscamos todos los datos de la base de datos
        $materias = Materia::all();
        $horarios = Horario::all();

        // 2. Pasamos esos datos a la vista
        //    'reservas.index' buscará el archivo 'resources/views/reservas/index.blade.php'
        return view('reservas.index', compact('materias', 'horarios'));
    }

    // ... aquí van los otros métodos (create, store, show, edit, update, destroy) ...
}