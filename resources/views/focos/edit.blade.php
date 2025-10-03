@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Foco</h1>
    <form action="{{ route('focos.update', $foco) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{ $foco->tipo }}" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" class="form-control">
                <option value="encendido" {{ $foco->estado == 'encendido' ? 'selected' : '' }}>Encendido</option>
                <option value="apagado" {{ $foco->estado == 'apagado' ? 'selected' : '' }}>Apagado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
