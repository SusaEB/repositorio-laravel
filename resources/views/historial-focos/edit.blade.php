@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Historial de Foco</h1>
    <form action="{{ route('historial-focos.update', $historialFoco) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="foco_id" class="form-label">Foco</label>
            <input type="number" name="foco_id" class="form-control" value="{{ $historialFoco->foco_id }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" value="{{ $historialFoco->fecha }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
