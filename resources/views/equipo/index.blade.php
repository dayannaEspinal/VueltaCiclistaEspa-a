<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Equipos</title>
</head>
<body>
    <h1>Lista Equipos</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <a href="{{ route('equipo.create') }}">Crear Equipo</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Director</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id_equipo }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->director }}</td>
                    <td>{{ $equipo->nacionalidad }}</td>
                    <td>
                        <a href="{{ route('equipo.show', $equipo->id_equipo) }}">Ver</a> |
                        <a href="{{ route('equipo.edit', $equipo->id_equipo) }}">Editar</a> |
                        <form action="{{ route('equipo.destroy', $equipo->id_equipo) }}" method="POST" style="display:inline">
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
