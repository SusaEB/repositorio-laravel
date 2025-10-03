@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Historial de Foco</h1>
    <form action="{{ route('historial-focos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="foco_id" class="form-label">Foco</label>
            <input type="number" name="foco_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
