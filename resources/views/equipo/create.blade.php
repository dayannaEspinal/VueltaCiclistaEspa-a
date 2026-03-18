<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Equipo</title>
</head>
<body>
    <h1>Crear Equipo</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('equipo.store') }}" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required maxlength="50"><br><br>

        <label>Director:</label><br>
        <input type="text" name="director" required maxlength="50"><br><br>

        <label>Nacionalidad:</label><br>
        <input type="text" name="nacionalidad" required maxlength="50"><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="{{ route('equipo.index') }}">Volver a la lista</a>
</body>
</html>
