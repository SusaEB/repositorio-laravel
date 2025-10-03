@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Nueva Reserva</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Aula</th>
                <th>Docente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $reserva->aula_id }}</td>
                    <td>{{ $reserva->docente_id }}</td>
                    <td>
                        <a href="{{ route('reservas.show', $reserva) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
