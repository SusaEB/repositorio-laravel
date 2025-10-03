@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Aulas</h1>
        <a href="{{ route('aulas.create') }}" class="btn btn-primary">Nueva Aula</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                    <tr>
                        <td>{{ $aula->id }}</td>
                        <td>{{ $aula->nombre }}</td>
                        <td>{{ $aula->capacidad }}</td>
                        <td>
                            <a href="{{ route('aulas.show', $aula) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('aulas.edit', $aula) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('aulas.destroy', $aula) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
