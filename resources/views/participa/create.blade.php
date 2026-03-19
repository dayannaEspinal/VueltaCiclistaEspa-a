<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Participacion</title>
</head>
<body>
    <h1>Crear Participacion</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('participa.store') }}" method="POST">
        @csrf
        <label>ID Equipo:</label><br>
        <input type="number" name="id_equipo" required><br><br>

        <label>ID Prueba:</label><br>
        <input type="number" name="id_prueba" required><br><br>

        <label>Fecha Inicio:</label><br>
        <input type="date" name="fecha_inicio" required><br><br>

        <label>Fin Contrato:</label><br>
        <input type="date" name="fin_contrato" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('participa.index') }}">Volver a la lista</a>
</body>
</html>
