@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Docente</h1>
    <form action="{{ route('docentes.update', $docente) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $docente->nombre }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Especialidad</label>
            <input type="text" name="especialidad" value="{{ $docente->especialidad }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>DNI</label>
            <input type="text" name="dni" value="{{ $docente->dni }}" class="form-control">
        </div>
        <button class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
