<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Equipos</title>
</head>
<body>
    <h1>Lista de Equipos</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <a href="/equipo/crear">Crear Nuevo Equipo</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Director</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
        </tr>
        @foreach($equipos as $equipo)
        <tr>
            <td>{{ $equipo->id }}</td>
            <td>{{ $equipo->nombre }}</td>
            <td>{{ $equipo->director }}</td>
            <td>{{ $equipo->nacionalidad }}</td>
            <td>
                <a href="/equipo/edit/{{ $equipo->id }}">Editar</a> |
                <a href="/equipo/eliminar/{{ $equipo->id }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
