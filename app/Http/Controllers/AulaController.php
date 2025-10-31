<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aula; // <-- ¡Importante!

class AulaController extends Controller
{
    /**
     * Muestra la lista de aulas (Arregla la pantalla blanca)
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    /**
     * Muestra el formulario para crear un aula nueva
     */
    public function create()
    {
        return view('aulas.create');
    }

    /**
     * Guarda el aula nueva en la base de datos
     */
    public function store(Request $request)
    {
        // 1. Validación (Reglas)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'ubicacion' => 'nullable|string|max:255',
        ]);

        // 2. Creación (usando el $fillable del Modelo)
        Aula::create($request->all());

        // 3. Redirección
        return redirect()->route('aulas.index')
                         ->with('success', '¡Aula creada exitosamente!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
