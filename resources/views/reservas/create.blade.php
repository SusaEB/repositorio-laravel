@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Reserva</h1>
    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Fecha:</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Aula:</label>
            <input type="number" name="aula_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Docente:</label>
            <input type="number" name="docente_id" class="form-control" required>
        </div>
        <button class="btn btn-success mt-2">Guardar</button>
    </form>
</div>
@endsection
