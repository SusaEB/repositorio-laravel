@extends('layouts.app')

@section('title', 'Listado de Docentes')
@section('header', 'Listado de Docentes')

@section('content')
<a href="{{ route('docentes.create') }}" class="btn btn-add">➕ Agregar Docente</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Especialidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($docentes as $docente)
            <tr>
                <td>{{ $docente->id }}</td>
                <td>{{ $docente->nombre }}</td>
                <td>{{ $docente->apellido }}</td>
                <td>{{ $docente->email }}</td>
                <td>{{ $docente->especialidad }}</td>
                <td>
                    <a href="{{ route('docentes.edit', $docente->id) }}" class="btn btn-edit">Editar</a>
                    <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay docentes cargados</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
