<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ciclista</title>
</head>
<body>
    <h1>Editar Ciclista</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/ciclista/{{ $ciclista->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID Equipo:</label><br>
        <input type="number" name="id_equipo" value="{{ $ciclista->id_equipo }}" required><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $ciclista->nombre }}" required maxlength="50"><br><br>

        <label>Nacionalidad:</label><br>
        <input type="text" name="nacionalidad" value="{{ $ciclista->nacionalidad }}" required maxlength="50"><br><br>

        <label>Fecha de Nacimiento:</label><br>
        <input type="date" name="fecha_nacimiento" value="{{ $ciclista->fecha_nacimiento }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="/ciclista">Volver a la lista</a>
</body>
</html>
