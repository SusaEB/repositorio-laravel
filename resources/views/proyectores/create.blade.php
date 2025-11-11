@extends('layouts.app')

@section('title', 'Registrar Proyector')
@section('header', 'Registrar Nuevo Proyector')

@section('content')

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        <strong>¡Error!</strong> Hay problemas con los datos:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('proyectores.store') }}" method="POST">
    @csrf

    <label>Asignar a Aula (Opcional):</label><br>
    <select name="aula_id">
        <option value="">(Sin asignar / En depósito)</option>
        @foreach ($aulas as $aula)
            <option value="{{ $aula->id }}" {{ old('aula_id') == $aula->id ? 'selected' : '' }}>
                {{ $aula->nombre }} (Cap: {{ $aula->capacidad }})
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Marca:</label><br>
    <input type="text" name="marca" value="{{ old('marca') }}" required><br>
    @error('marca') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo" value="{{ old('modelo') }}" required><br>
    @error('modelo') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Número de Serie:</label><br>
    <input type="text" name="numero_serie" value="{{ old('numero_serie') }}" required><br>
    @error('numero_serie') <small style="color:red">{{ $message }}</small> @enderror
    <br><br>

    <label>Estado:</label><br>
    <select name="estado">
        <option value="funcional" {{ old('estado') == 'funcional' ? 'selected' : '' }}>Funcional</option>
        <option value="en_reparacion" {{ old('estado') == 'en_reparacion' ? 'selected' : '' }}>En Reparación</option>
        <option value="roto" {{ old('estado') == 'roto' ? 'selected' : '' }}>Roto</option>
    </select>
    <br><br>

    <label>¿Tiene HDMI?</label><br>
    <input type="radio" name="tiene_hdmi" value="1" {{ old('tiene_hdmi', '1') == '1' ? 'checked' : '' }}> Sí
    <input type="radio" name="tiene_hdmi" value="0" {{ old('tiene_hdmi') == '0' ? 'checked' : '' }}> No
    <br><br>

    <button type="submit" class="btn btn-add">Guardar Proyector</button>
    <a href="{{ route('proyectores.index') }}">Cancelar</a>
</form>
@endsection