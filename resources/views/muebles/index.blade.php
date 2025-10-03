@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Muebles</h1>
    <a href="{{ route('muebles.create') }}" class="btn btn-primary">Nuevo Mueble</a>
    <table class="table mt-3">
        <thead><tr><th>ID</th><th>Tipo</th><th>Estado</th><th>Acciones</th></tr></thead>
        <tbody>
            @foreach ($muebles as $mueble)
                <tr>
                    <td>{{ $mueble->id }}</td>
                    <td>{{ $mueble->tipo }}</td>
                    <td>{{ $mueble->estado }}</td>
                    <td>
                        <a href="{{ route('muebles.show', $mueble) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('muebles.edit', $mueble) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('muebles.destroy', $mueble) }}" method="POST" style="display:inline;">
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
