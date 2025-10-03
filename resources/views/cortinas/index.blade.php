@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cortinas</h1>
    <a href="{{ route('cortinas.create') }}" class="btn btn-primary">Nueva Cortina</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Tipo</th><th>Estado</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($cortinas as $cortina)
                <tr>
                    <td>{{ $cortina->id }}</td>
                    <td>{{ $cortina->tipo }}</td>
                    <td>{{ $cortina->estado }}</td>
                    <td>
                        <a href="{{ route('cortinas.show', $cortina) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('cortinas.edit', $cortina) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('cortinas.destroy', $cortina) }}" method="POST" style="display:inline;">
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
