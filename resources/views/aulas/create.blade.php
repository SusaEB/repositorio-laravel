@extends('layouts.app')

@section('title', 'Agregar Aula')
@section('header', 'Agregar Aula')

@section('content')
    <form action="{{ route('aulas.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" required><br><br>

        <label>Ubicación (opcional):</label>
        <input type="text" name="ubicacion"><br><br>

        <button type="submit" class="btn btn-add">Guardar</button>
        <a href="{{ route('aulas.index') }}" class="btn btn-edit">Volver</a>
    </form>
@endsection
