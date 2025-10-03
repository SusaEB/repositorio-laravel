@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Focos</h1>
    <a href="{{ route('focos.create') }}" class="btn btn-primary">Nuevo Foco</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Tipo</th><th>Estado</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($focos as $foco)
                <tr>
                    <td>{{ $foco->id }}</td>
                    <td>{{ $foco->tipo }}</td>
                    <td>{{ $foco->estado }}</td>
                    <td>
                        <a href="{{ route('focos.show', $foco) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('focos.edit', $foco) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('focos.destroy', $foco) }}" method="POST" style="display:inline;">
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
