<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fdf6f0;
            color: #333;
            padding: 20px;
        }

        header {
            background-color: #ffe4c4;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            font-size: 1.8em;
            font-weight: bold;
            color: #5a3e36;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        nav a {
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            color: #5a3e36;
            background-color: #ffd8b1; /* naranja pastel */
            transition: all 0.2s ease;
            box-shadow: 0 3px 6px rgba(0,0,0,0.08);
        }

        nav a:hover {
            background-color: #ffc48f;
            transform: scale(1.05);
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #ffd8b1;
            color: #5a3e36;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #fff0e5;
        }

        tr:hover {
            background-color: #ffe0c2;
        }

        a.btn, button.btn {
            padding: 6px 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-right: 5px;
        }

        .btn-add {
            background-color: #ffd8b1;
            color: #5a3e36;
        }

        .btn-add:hover {
            background-color: #ffc48f;
        }

        .btn-edit {
            background-color: #b3e5fc;
            color: #036b99;
        }

        .btn-edit:hover {
            background-color: #82d1f2;
        }

        .btn-delete {
            background-color: #fcb3b3;
            color: #9a1c1c;
        }

        .btn-delete:hover {
            background-color: #f79898;
        }

        form {
            display: inline;
        }

        h1 {
            margin-bottom: 20px;
            color: #5a3e36;
        }
    </style>
</head>
<body>

<header>
    @yield('header', 'Panel de Administración')
</header>

<!-- 🌈 Menú principal -->
<nav>
    <a href="{{ route('menu.principal') }}">🏠 Inicio</a>
    <a href="{{ route('docentes.index') }}">👩‍🏫 Docentes</a>
    <a href="{{ route('aulas.index') }}">🏫 Aulas</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
