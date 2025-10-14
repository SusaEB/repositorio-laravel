<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Trae todos los docentes desde la base de datos
    $docentes = \App\Models\Docente::all();

    // Envía los datos a la vista
    return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
    // Validar los datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'especialidad' => 'required|string|max:255',
        'dni' => 'required|string|max:20',
    ]);

    // Crear el nuevo docente
    \App\Models\Docente::create($request->all());

    // Redirigir de nuevo al listado
    return redirect()->route('docentes.index');
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
