@extends('layouts.app')

@section('title', 'Listado de Proyectores')
@section('header', 'Listado de Proyectores')

@section('content')

@if (session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('proyectores.create') }}" class="btn btn-add">Registrar Nuevo Proyector</a>
<br><br>

<table>
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>N° de Serie</th>
            <th>Aula Asignada</th> <th>Estado</th> <th>HDMI</th> <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($proyectores as $proyector)
            <tr>
                <td>{{ $proyector->marca }}</td>
                <td>{{ $proyector->modelo }}</td>
                <td>{{ $proyector->numero_serie }}</td>
                <td>
                    {{ $proyector->aula->nombre ?? 'Sin asignar' }}
                </td>
                <td>{{ $proyector->estado }}</td>
                <td>{{ $proyector->tiene_hdmi ? 'Sí' : 'No' }}</td>
                <td>
                    </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No hay proyectores registrados.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<br>
<a href="{{ url('/') }}">← Volver al inicio</a>
@endsection