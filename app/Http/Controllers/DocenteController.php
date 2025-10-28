<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Docente;            // <-- Importante para interactuar con la tabla
use Illuminate\Validation\Rule; // <-- Importante para la regla 'unique' en update

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Muestra la lista principal de docentes)
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     * (Muestra el formulario para crear uno nuevo)
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     * (Guarda el nuevo docente en la base de datos)
     */
    public function store(Request $request)
    {
        // 1. Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:docentes', // Email debe ser único
            'especialidad' => 'required|string',
        ]);

        // 2. Crea el docente
        Docente::create($request->all());

        // 3. Redirige a la lista
        return redirect()->route('docentes.index')
                         ->with('success', '¡Docente creado exitosamente!');
    }

    /**
     * Display the specified resource.
     * (No lo estamos usando por ahora)
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * (ESTA ES LA LÓGICA PARA ARREGLAR LA PANTALLA BLANCA DE "EDITAR")
     */
    public function edit(string $id)
    {
        // 1. Busca al docente por su ID
        $docente = Docente::findOrFail($id);
        
        // 2. Muestra la vista 'edit.blade.php' y le pasa los datos
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     * (ESTA ES LA LÓGICA PARA GUARDAR LOS CAMBIOS DE "EDITAR")
     */
    public function update(Request $request, string $id)
    {
        // 1. Busca al docente
        $docente = Docente::findOrFail($id);

        // 2. Valida los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'especialidad' => 'required|string',
            'email' => [
                'required',
                'email',
                // Regla especial: el email debe ser único,
                // PERO debe ignorar al propio docente que estamos editando
                Rule::unique('docentes')->ignore($docente->id), 
            ],
        ]);

        // 3. Actualiza al docente con los datos nuevos
        $docente->update($request->all());

        // 4. Redirige a la lista
        return redirect()->route('docentes.index')
                         ->with('success', '¡Docente actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     * (ESTA ES LA LÓGICA PARA ARREGLAR LA PANTALLA BLANCA DE "ELIMINAR")
     */
    public function destroy(string $id)
    {
        // 1. Busca al docente
        $docente = Docente::findOrFail($id);

        // 2. Lo borra
        $docente->delete();

        // 3. Redirige a la lista
        return redirect()->route('docentes.index')
                         ->with('success', 'Docente eliminado correctamente.');
    }
}