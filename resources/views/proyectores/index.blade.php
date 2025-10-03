@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Proyectores</h1>
    <a href="{{ route('proyectores.create') }}" class="btn btn-primary">Nuevo Proyector</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Marca</th><th>Estado</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($proyectores as $proyector)
                <tr>
                    <td>{{ $proyector->id }}</td>
                    <td>{{ $proyector->marca }}</td>
                    <td>{{ $proyector->estado }}</td>
                    <td>
                        <a href="{{ route('proyectores.show', $proyector) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('proyectores.edit', $proyector) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('proyectores.destroy', $proyector) }}" method="POST" style="display:inline;">
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
