@extends('layouts.app')

@section('title', 'Editar Aula')
@section('header', 'Editar Aula')

@section('content')
    <form action="{{ route('aulas.update', $aula) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $aula->nombre }}" required><br><br>

        <label>Capacidad:</label>
        <input type="number" name="capacidad" value="{{ $aula->capacidad }}" required><br><br>

        <label>Ubicación:</label>
        <input type="text" name="ubicacion" value="{{ $aula->ubicacion }}"><br><br>

        <button type="submit" class="btn btn-add">Actualizar</button>
        <a href="{{ route('aulas.index') }}" class="btn btn-edit">Volver</a>
    </form>
@endsection
