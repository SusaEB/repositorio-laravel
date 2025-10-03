@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cortina</h1>
    <form action="{{ route('cortinas.update', $cortina) }}" method="POST">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $cortina->tipo }}">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{ $cortina->estado }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection
