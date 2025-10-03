@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historial de Focos</h1>
    <a href="{{ route('historial-focos.create') }}" class="btn btn-primary">Nuevo Registro</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Foco</th><th>Fecha</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($historialFocos as $historial)
                <tr>
                    <td>{{ $historial->id }}</td>
                    <td>{{ $historial->foco_id }}</td>
                    <td>{{ $historial->fecha }}</td>
                    <td>
                        <a href="{{ route('historial-focos.show', $historial) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('historial-focos.edit', $historial) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('historial-focos.destroy', $historial) }}" method="POST" style="display:inline;">
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
