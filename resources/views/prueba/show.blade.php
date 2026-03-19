<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Prueba</title>
</head>
<body>
    <h1>Detalle Prueba</h1>

    <p><strong>ID:</strong> {{ $prueba->id }}</p>
    <p><strong>Nombre:</strong> {{ $prueba->nombre }}</p>
    <p><strong>Ciclista Ganador:</strong> {{ $prueba->ciclista_ganador }}</p>
    <p><strong>Clasificacion Final:</strong> {{ $prueba->clasificacion_final }}</p>
    <p><strong>Numero de Etapas:</strong> {{ $prueba->numero_etapas }}</p>
    <p><strong>Anio Edicion:</strong> {{ $prueba->anio_edicion }}</p>
    <p><strong>KM Totales:</strong> {{ $prueba->km_totales }}</p>

    <a href="{{ route('prueba.edit', $prueba->id) }}">Editar</a>
    <a href="{{ route('prueba.index') }}">Volver a la lista</a>
</body>
</html>
