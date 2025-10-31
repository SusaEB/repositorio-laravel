@extends('layouts.app')

@section('title', 'Menú Principal')

@section('header', 'Panel de Control')

@section('content')

<div class="menu-grid">
    <a href="{{ route('docentes.index') }}" class="card">
        <span class="emoji">👩‍🏫</span>
        <h2>Docentes</h2>
        <p>Gestión de los profesores del sistema.</p>
    </a>

    <a href="{{ route('aulas.index') }}" class="card">
        <span class="emoji">🏫</span>
        <h2>Aulas</h2>
        <p>Listado y administración de aulas.</p>
    </a>

    <a href="{{ route('materias.index') }}" class="card">
        <span class="emoji">📚</span>
        <h2>Materias</h2>
        <p>Ver el listado de materias.</p>
    </a>

    <a href="{{ route('horarios.index') }}" class="card">
        <span class="emoji">🕐</span>
        <h2>Horarios</h2>
        <p>Ver los horarios disponibles.</p>
    </a>
</div>

<style>
.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    padding: 20px;
}

.card {
    background-color: #fff0e5;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    text-decoration: none;
    color: #5a3e36;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    transition: all 0.25s ease;
}

.card:hover {
    transform: translateY(-5px);
    background-color: #ffe4c4;
}

.card .emoji {
    font-size: 40px;
    display: block;
    margin-bottom: 10px;
}
</style>
@endsection