@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Proyector</h1>
    <form action="{{ route('proyectores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="disponible">Disponible</option>
                <option value="ocupado">Ocupado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
