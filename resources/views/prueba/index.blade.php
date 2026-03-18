<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pruebas</title>
</head>
<body>
    <h1>Lista Pruebas</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <a href="{{ route('prueba.create') }}">Crear Prueba</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ciclista Ganador</th>
                <th>Clasificación Final</th>
                <th>Numero de Etapas</th>
                <th>Año Edición</th>
                <th>Km Totales</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pruebas as $prueba)
                <tr>
                    <td>{{ $prueba->id }}</td>
                    <td>{{ $prueba->nombre }}</td>
                    <td>{{ $prueba->ciclista_ganador }}</td>
                    <td>{{ $prueba->clasificacion_final }}</td>
                    <td>{{ $prueba->numero_etapas }}</td>
                    <td>{{ $prueba->anio_edicion }}</td>
                    <td>{{ $prueba->km_totales }}</td>
                    <td>
                        <a href="{{ route('prueba.show', $prueba->id) }}">Ver</a> |
                        <a href="{{ route('prueba.edit', $prueba->id) }}">Editar</a> |
                        <a href="{{ route('prueba.eliminar', $prueba->id) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
