@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nueva Aula</h1>

        <form action="{{ route('aulas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="capacidad">Capacidad:</label>
                <input type="number" name="capacidad" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success mt-2">Guardar</button>
        </form>
    </div>
@endsection
