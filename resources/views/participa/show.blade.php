<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Participacion</title>
</head>
<body>
    <h1>Detalle Participacion</h1>

    <p><strong>ID:</strong> {{ $participa->id_participa }}</p>
    <p><strong>ID Equipo:</strong> {{ $participa->id_equipo }}</p>
    <p><strong>ID Prueba:</strong> {{ $participa->id_prueba }}</p>
    <p><strong>Fecha Inicio:</strong> {{ $participa->fecha_inicio }}</p>
    <p><strong>Fin Contrato:</strong> {{ $participa->fin_contrato }}</p>

    <a href="{{ route('participa.edit', $participa->id_participa) }}">Editar</a>
    <a href="{{ route('participa.index') }}">Volver a la lista</a>
</body>
</html>
