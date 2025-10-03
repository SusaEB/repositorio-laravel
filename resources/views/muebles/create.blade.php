@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Mueble</h1>
    <form action="{{ route('muebles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
