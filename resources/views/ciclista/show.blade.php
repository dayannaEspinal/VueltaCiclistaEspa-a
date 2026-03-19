<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Ciclista</title>
</head>
<body>
    <h1>Detalle Ciclista</h1>

    <p><strong>ID:</strong> {{ $ciclista->id_ciclistas }}</p>
    <p><strong>ID Equipo:</strong> {{ $ciclista->id_equipo }}</p>
    <p><strong>Nombre:</strong> {{ $ciclista->nombre }}</p>
    <p><strong>Nacionalidad:</strong> {{ $ciclista->nacionalidad }}</p>
    <p><strong>Fecha de Nacimiento:</strong> {{ $ciclista->fecha_nacimiento }}</p>

    <a href="{{ route('ciclista.edit', $ciclista->id_ciclistas) }}">Editar</a>
    <a href="{{ route('ciclista.index') }}">Volver a la lista</a>
</body>
</html>
