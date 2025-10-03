@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historial de Uso de Aires</h1>
    <a href="{{ route('historial-aires.create') }}" class="btn btn-primary">Nuevo Registro</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Aire</th><th>Fecha</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($historialAires as $historial)
                <tr>
                    <td>{{ $historial->id }}</td>
                    <td>{{ $historial->aire_id }}</td>
                    <td>{{ $historial->fecha }}</td>
                    <td>
                        <a href="{{ route('historial-aires.show', $historial) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('historial-aires.edit', $historial) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('historial-aires.destroy', $historial) }}" method="POST" style="display:inline;">
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
