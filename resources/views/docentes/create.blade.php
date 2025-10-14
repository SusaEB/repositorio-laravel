@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar nuevo docente</h1>

    {{-- Muestra mensajes de error si hay --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario para agregar docente --}}
    <form action="{{ route('docentes.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nombre">Nombre completo:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="especialidad">Especialidad:</label>
            <input type="text" name="especialidad" id="especialidad" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="dni">DNI:</label>
            <input type="number" name="dni" id="dni" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('docentes.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
