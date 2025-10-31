@extends('layouts.app')

@section('title', 'Listado de Aulas')
@section('header', 'Listado de Aulas')

@section('content')

@if (session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('aulas.create') }}" class="btn btn-add">Crear Nueva Aula</a>
<br><br>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Capacidad</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($aulas as $aula)
            <tr>
                <td>{{ $aula->id }}</td>
                <td>{{ $aula->nombre }}</td>
                <td>{{ $aula->capacidad }}</td>
                <td>{{ $aula->ubicacion ?? 'No especificada' }}</td>
                <td>
                    </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay aulas registradas todavía.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
<a href="{{ url('/') }}">← Volver al inicio</a>
@endsection