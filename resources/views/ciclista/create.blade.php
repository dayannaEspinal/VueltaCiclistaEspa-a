<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ciclista</title>
</head>
<body>
    <h1>Crear Ciclista</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ciclista.store') }}" method="POST">
        @csrf
        <label>ID Equipo:</label><br>
        <input type="number" name="id_equipo" required><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required maxlength="50"><br><br>

        <label>Nacionalidad:</label><br>
        <input type="text" name="nacionalidad" required maxlength="50"><br><br>

        <label>Fecha de Nacimiento:</label><br>
        <input type="date" name="fecha_nacimiento" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('ciclista.index') }}">Volver a la lista</a>
</body>
</html>
