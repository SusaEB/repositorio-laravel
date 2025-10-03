@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Aire Acondicionado</h1>
    <form action="{{ route('aires.update', $aire) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" name="marca" class="form-control" value="{{ $aire->marca }}" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="encendido" {{ $aire->estado == 'encendido' ? 'selected' : '' }}>Encendido</option>
                <option value="apagado" {{ $aire->estado == 'apagado' ? 'selected' : '' }}>Apagado</option>
                <option value="mantenimiento" {{ $aire->estado == 'mantenimiento' ? 'selected' : '' }}>En mantenimiento</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
