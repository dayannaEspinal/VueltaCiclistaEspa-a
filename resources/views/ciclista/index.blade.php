<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Ciclista</title>
</head>
<body>
    <h1>Lista Ciclista</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <a href="{{ route('ciclista.create') }}">Crear Ciclista</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipo</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Fecha Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciclistas as $ciclista)
                <tr>
                    <td>{{ $ciclista->id_ciclistas }}</td>
                    <td>{{ $ciclista->id_equipo }}</td>
                    <td>{{ $ciclista->nombre }}</td>
                    <td>{{ $ciclista->nacionalidad }}</td>
                    <td>{{ $ciclista->fecha_nacimiento }}</td>
                    <td>
                        <a href="{{ route('ciclista.show', $ciclista->id_ciclistas) }}">Ver</a> |
                        <a href="{{ route('ciclista.edit', $ciclista->id_ciclistas) }}">Editar</a> |
                        <form action="{{ route('ciclista.destroy', $ciclista->id_ciclistas) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
