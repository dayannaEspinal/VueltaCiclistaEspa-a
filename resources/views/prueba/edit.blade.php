<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prueba</title>
</head>
<body>
    <h1>Editar Prueba</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('prueba.update', $prueba->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $prueba->nombre }}" required maxlength="50"><br><br>

        <label>Ciclista Ganador:</label><br>
        <input type="text" name="ciclista_ganador" value="{{ $prueba->ciclista_ganador }}" required maxlength="50"><br><br>

        <label>Clasificación Final:</label><br>
        <input type="text" name="clasificacion_final" value="{{ $prueba->clasificacion_final }}" required maxlength="50"><br><br>

        <label>Número de Etapas:</label><br>
        <input type="number" name="numero_etapas" value="{{ $prueba->numero_etapas }}" required><br><br>

        <label>Año Edición:</label><br>
        <input type="number" name="anio_edicion" value="{{ $prueba->anio_edicion }}" required><br><br>

        <label>Kilómetros Totales:</label><br>
        <input type="number" name="km_totales" value="{{ $prueba->km_totales }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('prueba.index') }}">Volver a la lista</a>
</body>
</html>
