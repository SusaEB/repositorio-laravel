@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Aula</h1>

        <form action="{{ route('aulas.update', $aula) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $aula->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" class="form-control" value="{{ $aula->capacidad }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
        </form>
    </div>
@endsection
