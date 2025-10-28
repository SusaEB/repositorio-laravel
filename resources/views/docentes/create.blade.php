@extends('layouts.app')

@section('title', 'Agregar Docente')

@section('header', 'Agregar Nuevo Docente')

@section('content')
<form action="{{ route('docentes.store') }}" method="POST">
    @csrf
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Apellido:</label><br>
    <input type="text" name="apellido" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Especialidad:</label><br>
    <input type="text" name="especialidad" required><br><br>

    <button type="submit" class="btn btn-add">Guardar</button>
</form>

<br><br>
<a href="{{ route('docentes.index') }}">← Volver al listado</a>
@endsection
