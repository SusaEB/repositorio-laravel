@extends('layouts.app')

@section('title', 'Crear Aula')
@section('header', 'Crear Nueva Aula')

@section('content')

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        <strong>¡Error!</strong> Hay problemas con los datos:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('aulas.store') }}" method="POST">
    @csrf

    <label>Nombre del Aula:</label><br>
    <input type="text" name="nombre" value="{{ old('nombre') }}" required><br>
    @error('nombre') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Capacidad (N° de personas):</label><br>
    <input type="number" name="capacidad" value="{{ old('capacidad') }}" required><br>
    @error('capacidad') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Ubicación (Opcional):</label><br>
    <input type="text" name="ubicacion" value="{{ old('ubicacion') }}"><br>
    @error('ubicacion') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <button type="submit" class="btn btn-add">Guardar Aula</button>
    <a href="{{ route('aulas.index') }}">Cancelar</a>
</form>
@endsection