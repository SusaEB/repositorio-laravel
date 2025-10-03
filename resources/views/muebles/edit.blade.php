@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Mueble</h1>
    <form action="{{ route('muebles.update', $mueble) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" class="form-control" value="{{ $mueble->tipo }}" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $mueble->cantidad }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
