@extends('layouts.app')

@section('title', 'Listado de Horarios')
@section('header', 'Listado de Horarios')

@section('content')
<br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Hora de Inicio</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($horarios as $horario)
            <tr>
                <td>{{ $horario->id }}</td>
                <td>{{ $horario->hora_inicio }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No hay horarios cargados</td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
<a href="{{ url('/') }}">← Volver al inicio</a>
@endsection