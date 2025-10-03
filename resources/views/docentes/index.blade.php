<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Docentes</title>
</head>
<body>
    <h1>Listado de Docentes</h1>

    @if($docentes->count())
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>DNI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docentes as $docente)
                    <tr>
                        <td>{{ $docente->id }}</td>
                        <td>{{ $docente->nombre }}</td>
                        <td>{{ $docente->especialidad }}</td>
                        <td>{{ $docente->dni }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay docentes cargados.</p>
    @endif
</body>
</html>
