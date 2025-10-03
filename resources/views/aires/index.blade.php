@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Aires Acondicionados</h1>
    <a href="{{ route('aires.create') }}" class="btn btn-primary">Nuevo Aire</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Modelo</th><th>Estado</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($aires as $aire)
                <tr>
                    <td>{{ $aire->id }}</td>
                    <td>{{ $aire->modelo }}</td>
                    <td>{{ $aire->estado }}</td>
                    <td>
                        <a href="{{ route('aires.show', $aire) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('aires.edit', $aire) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('aires.destroy', $aire) }}" method="POST" style="display:inline;">
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
