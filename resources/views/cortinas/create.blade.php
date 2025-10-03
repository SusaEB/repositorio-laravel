@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nueva Cortina</h1>
    <form action="{{ route('cortinas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Guardar</button>
    </form>
</div>
@endsection
