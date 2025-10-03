@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Disponibilidad</h1>
    <form action="{{ route('disponibilidades.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="aula_id" class="form-label">Aula</label>
            <input type="number" name="aula_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hora_inicio" class="form-label">Hora Inicio</label>
            <input type="time" name="hora_inicio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hora_fin" class="form-label">Hora Fin</label>
            <input type="time" name="hora_fin" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
