<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Ciclistas</title>
</head>
<body>
    <h1>Lista de Ciclistas</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <a href="/ciclista/crear">Crear Nuevo Ciclista</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Equipo</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Fecha Nacimiento</th>
            <th>Acciones</th>
        </tr>
        @foreach($ciclistas as $ciclista)
        <tr>
            <td>{{ $ciclista->id }}</td>
            <td>{{ $ciclista->id_equipo }}</td>
            <td>{{ $ciclista->nombre }}</td>
            <td>{{ $ciclista->nacionalidad }}</td>
            <td>{{ $ciclista->fecha_nacimiento }}</td>
            <td>
                <a href="/ciclista/edit/{{ $ciclista->id }}">Editar</a> |
                <a href="/ciclista/eliminar/{{ $ciclista->id }}">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
