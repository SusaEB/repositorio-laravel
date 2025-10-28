@extends('layouts.app')

@section('title', 'Listado de Aulas')
@section('header', 'Listado de Aulas')

@section('content')
    <a href="{{ route('aulas.create') }}" class="btn btn-add">➕ Agregar Aula</a>

    @if ($aulas->isEmpty())
        <p>No hay aulas registradas.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                    <tr>
                        <td>{{ $aula->nombre }}</td>
                        <td>{{ $aula->capacidad }}</td>
                        <td>{{ $aula->ubicacion ?? 'Sin especificar' }}</td>
                        <td>
                            <a href="{{ route('aulas.edit', $aula) }}" class="btn btn-edit">Editar</a>
                            <form action="{{ route('aulas.destroy', $aula) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar esta aula?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
