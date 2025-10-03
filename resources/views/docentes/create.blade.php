@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Docente</h1>
    <form action="{{ route('docentes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label>Especialidad</label>
            <input type="text" name="especialidad" class="form-control">
        </div>
        <div class="mb-3">
            <label>DNI</label>
            <input type="text" name="dni" class="form-control">
        </div>
        <button class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
