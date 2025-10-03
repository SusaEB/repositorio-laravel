@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Foco</h1>
    <form action="{{ route('focos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="encendido">Encendido</option>
                <option value="apagado">Apagado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
