@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Materia</h1>
    <form action="{{ route('materias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
