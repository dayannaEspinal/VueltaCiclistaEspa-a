<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Equipo</title>
</head>
<body>
    <h1>Detalle Equipo</h1>

    <p><strong>ID:</strong> {{ $equipo->id_equipo }}</p>
    <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
    <p><strong>Director:</strong> {{ $equipo->director }}</p>
    <p><strong>Nacionalidad:</strong> {{ $equipo->nacionalidad }}</p>

    <a href="{{ route('equipo.edit', $equipo->id_equipo) }}">Editar</a>
    <a href="{{ route('equipo.index') }}">Volver a la lista</a>
</body>
</html>
