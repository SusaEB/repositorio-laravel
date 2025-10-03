@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Disponibilidades</h1>
    <a href="{{ route('disponibilidades.create') }}" class="btn btn-primary">Nueva Disponibilidad</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Aula</th><th>Fecha</th><th>Hora Inicio</th><th>Hora Fin</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($disponibilidades as $disponibilidad)
                <tr>
                    <td>{{ $disponibilidad->id }}</td>
                    <td>{{ $disponibilidad->aula_id }}</td>
                    <td>{{ $disponibilidad->fecha }}</td>
                    <td>{{ $disponibilidad->hora_inicio }}</td>
                    <td>{{ $disponibilidad->hora_fin }}</td>
                    <td>
                        <a href="{{ route('disponibilidades.show', $disponibilidad) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('disponibilidades.edit', $disponibilidad) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('disponibilidades.destroy', $disponibilidad) }}" method="POST" style="display:inline;">
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
