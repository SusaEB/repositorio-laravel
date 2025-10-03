@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Disponibilidad</h1>
    <form action="{{ route('disponibilidades.update', $disponibilidad) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="aula_id" class="form-label">Aula</label>
            <input type="number" name="aula_id" class="form-control" value="{{ $disponibilidad->aula_id }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $disponibilidad->fecha }}" required>
        </div>
        <div class="mb-3">
            <label for="hora_inicio" class="form-label">Hora Inicio</label>
            <input type="time" name="hora_inicio" class="form-control" value="{{ $disponibilidad->hora_inicio }}" required>
        </div>
        <div class="mb-3">
            <label for="hora_fin" class="form-label">Hora Fin</label>
            <input type="time" name="hora_fin" class="form-control" value="{{ $disponibilidad->hora_fin }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
