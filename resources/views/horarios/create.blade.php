@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Horario</h1>
    <form action="{{ route('horarios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Día</label>
            <input type="text" name="dia" class="form-control">
        </div>
        <div class="mb-3">
            <label>Hora Inicio</label>
            <input type="time" name="hora_inicio" class="form-control">
        </div>
        <div class="mb-3">
            <label>Hora Fin</label>
            <input type="time" name="hora_fin" class="form-control">
        </div>
        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
