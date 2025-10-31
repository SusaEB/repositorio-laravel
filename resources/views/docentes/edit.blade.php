@extends('layouts.app')

@section('title', 'Editar Docente')
@section('header', 'Editar Docente')

@section('content')

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        <strong>¡Error!</strong> Hay problemas con los datos que intentaste guardar:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('docentes.update', $docente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ old('nombre', $docente->nombre) }}" required><br>
    @error('nombre') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Apellido:</label><br>
    <input type="text" name="apellido" value="{{ old('apellido', $docente->apellido) }}" required><br>
    @error('apellido') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ old('email', $docente->email) }}" required><br>
    @error('email') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Especialidad:</label><br>
    <input type="text" name="especialidad" value="{{ old('especialidad', $docente->especialidad) }}" required><br>
    @error('especialidad') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <button type="submit" class="btn btn-add">Actualizar</button>
    <a href="{{ route('docentes.index') }}">Cancelar</a>
</form>
@endsection