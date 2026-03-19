<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo</title>
</head>
<body>
    <h1>Editar Equipo</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('equipo.update', $equipo->id_equipo) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $equipo->nombre }}" required maxlength="50"><br><br>

        <label>Director:</label><br>
        <input type="text" name="director" value="{{ $equipo->director }}" required maxlength="50"><br><br>

        <label>Nacionalidad:</label><br>
        <input type="text" name="nacionalidad" value="{{ $equipo->nacionalidad }}" required maxlength="50"><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('equipo.index') }}">Volver a la lista</a>
</body>
</html>
