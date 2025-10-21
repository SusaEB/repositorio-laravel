<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Reserva</title>
</head>
<body>

    <h1>Hacer una Reserva</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        
        @csrf

        <div>
            <label for="materia">Curso (Materia):</label>
            <select name="materia_id" id="materia">
                <option value="">-- Seleccione un curso --</option>
                
                @foreach ($materias as $materia)
                    <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                @endforeach
            </select>
        </div>

        <br>

        <div>
            <label for="horario">Horario:</label>
            <select name="horario_id" id="horario">
                <option value="">-- Seleccione un horario --</option>
                
                @foreach ($horarios as $horario)
                    <option value="{{ $horario->id }}">
                        {{ $horario->hora_inicio }} - {{ $horario->hora_fin }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">Reservar ahora</button>

    </form>

</body>
</html>