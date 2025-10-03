@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Materia</h1>
    <form action="{{ route('materias.update', $materia) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ $materia->nombre }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control">{{ $materia->descripcion }}</textarea>
        </div>
        <button class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
