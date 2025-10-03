@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Horario</h1>
    <form action="{{ route('horarios.update', $horario) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Día</label>
            <input type="text" name="dia" value="{{ $horario->dia }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Hora Inicio</label>
            <input type="time" name="hora_inicio" value="{{ $horario->hora_inicio }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Hora Fin</label>
            <input type="time" name="hora_fin" value="{{ $horario->hora_fin }}" class="form-control">
        </div>
        <button class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
