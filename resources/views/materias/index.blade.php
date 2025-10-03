@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Materias</h1>
    <a href="{{ route('materias.create') }}" class="btn btn-primary">Nueva Materia</a>

    <table class="table mt-3">
        <thead>
            <tr><th>ID</th><th>Nombre</th><th>Código</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->codigo }}</td>
                    <td>
                        <a href="{{ route('materias.show', $materia) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('materias.edit', $materia) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('materias.destroy', $materia) }}" method="POST" style="display:inline;">
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
