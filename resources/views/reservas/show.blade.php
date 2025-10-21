@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Reserva</h1>

    <ul>
        <li><strong>ID:</strong> {{ $reserva->id }}</li>
        <li><strong>Docente:</strong> {{ $reserva->docente->nombre ?? 'Sin asignar' }}</li>
        <li><strong>Aula:</strong> {{ $reserva->aula->nombre ?? 'Sin aula' }}</li>
        <li><strong>Fecha:</strong> {{ $reserva->fecha }}</li>
        <li><strong>Hora:</strong> {{ $reserva->hora }}</li>
    </ul>

    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
