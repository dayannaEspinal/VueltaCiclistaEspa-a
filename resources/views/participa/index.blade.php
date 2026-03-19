<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Participaciones</title>
</head>
<body>
    <h1>Lista Participaciones</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <a href="{{ route('participa.create') }}">Crear Participacion</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Equipo</th>
                <th>ID Prueba</th>
                <th>Fecha Inicio</th>
                <th>Fin Contrato</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participas as $participa)
                <tr>
                    <td>{{ $participa->id_participa }}</td>
                    <td>{{ $participa->id_equipo }}</td>
                    <td>{{ $participa->id_prueba }}</td>
                    <td>{{ $participa->fecha_inicio }}</td>
                    <td>{{ $participa->fin_contrato }}</td>
                    <td>
                        <a href="{{ route('participa.show', $participa->id_participa) }}">Ver</a> |
                        <a href="{{ route('participa.edit', $participa->id_participa) }}">Editar</a> |
                        <form action="{{ route('participa.destroy', $participa->id_participa) }}" method="POST" style="display:inline">
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
