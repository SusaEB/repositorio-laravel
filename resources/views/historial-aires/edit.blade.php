@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Historial de Aire</h1>
    <form action="{{ route('historial-aires.update', $historialAire) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="aire_id" class="form-label">Aire</label>
            <input type="number" name="aire_id" class="form-control" value="{{ $historialAire->aire_id }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $historialAire->fecha }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
