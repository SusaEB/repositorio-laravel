<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horario; // <-- ¡MUY IMPORTANTE AGREGAR ESTO!

class HorarioController extends Controller
{
    /**
     * Esta es la función que arregla la pantalla blanca
     */
    public function index()
    {
        // 1. Busca todos los horarios de la base de datos
        $horarios = Horario::all();

        // 2. Los envía a la vista 'horarios.index'
        return view('horarios.index', compact('horarios'));
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
        //
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
