@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Proyector</h1>
    <form action="{{ route('proyectores.update', $proyector) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" value="{{ $proyector->marca }}" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="disponible" {{ $proyector->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="ocupado" {{ $proyector->estado == 'ocupado' ? 'selected' : '' }}>Ocupado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
