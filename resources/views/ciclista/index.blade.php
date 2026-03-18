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

    
    <a href="/ciclista/crear">Crear Nuevo Ciclista</a>

    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Fecha Nacimiento</th>
            <th>Acciones</th>
        </tr>
        @foreach($ciclistas as $ciclista)
        <tr>
            <td>{{ $ciclista->IdCiclista }}</td>
            <td>{{ $ciclista->Nombre }}</td>
            <td>{{ $ciclista->Nacionalidad }}</td>
            <td>{{ $ciclista->FechaNacimiento }}</td>
            <td>
                <a href="/ciclista/edit?id={{ $ciclista->IdCiclista }}">Editar</a> |
                <a href="/ciclista/delet?id={{ $ciclista->IdCiclista }}" onclick="return confirm('¿Desea eliminar este ciclista?')">Eliminar</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
