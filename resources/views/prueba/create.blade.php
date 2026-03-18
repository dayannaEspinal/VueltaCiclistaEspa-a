<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Prueba</title>
</head>
<body>
    <h1>Crear Prueba</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('prueba.store') }}" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required maxlength="50"><br><br>

        <label>Ciclista Ganador:</label><br>
        <input type="text" name="ciclista_ganador" required maxlength="50"><br><br>

        <label>Clasificación Final:</label><br>
        <input type="text" name="clasificacion_final" required maxlength="50"><br><br>

        <label>Nú
            Numero de Etapas:</label><br>
        <input type="number" name="numero_etapas" required><br><br>

        <label>Año Edición:</label><br>
        <input type="number" name="anio_edicion" required><br><br>

        <label>Kilómetros Totales:</label><br>
        <input type="number" name="km_totales" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('prueba.index') }}">Volver a la lista</a>
</body>
</html>
