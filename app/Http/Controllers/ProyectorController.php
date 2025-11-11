<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proyector; // <-- Modelo Proyector
use App\Models\Aula;       // <-- ¡Necesitamos el modelo Aula!

class ProyectorController extends Controller
{
    /**
     * Muestra la lista de proyectores
     */
    public function index()
    {
        // Usamos "with('aula')" para traer el proyector Y los datos del aula
        // en una sola consulta. Es mucho más eficiente.
        $proyectores = Proyector::with('aula')->get();
        
        return view('proyectores.index', compact('proyectores'));
    }

    /**
     * Muestra el formulario para crear un proyector
     */
    public function create()
    {
        // ¡PASO CLAVE!
        // Buscamos todas las aulas para poder listarlas en el <select>
        $aulas = Aula::all();
        
        return view('proyectores.create', compact('aulas'));
    }

    /**
     * Guarda el proyector nuevo en la base de datos
     */
    public function store(Request $request)
    {
        // 1. Validación (¡actualizada!)
        $request->validate([
            'aula_id' => 'nullable|exists:aulas,id', // 'nullable' permite no asignarlo
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'numero_serie' => 'required|string|max:255|unique:proyectores',
            'estado' => 'required|string|max:255',
            'tiene_hdmi' => 'required|boolean',
        ]);

        // 2. Creación
        Proyector::create($request->all());

        // 3. Redirección
        return redirect()->route('proyectores.index')
                         ->with('success', '¡Proyector creado exitosamente!');
    }
}