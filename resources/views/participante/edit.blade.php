<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Participante</title>
</head>
<body>
    <h1>Editar Participante</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('participante.update', $participante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label><br>
        <input type="text" name="nombre" value="{{ $participante->nombre }}" required maxlength="50"><br><br>

        <label>Edad:</label><br>
        <input type="number" name="edad" value="{{ $participante->edad }}" required><br><br>

        <label>País:</label><br>
        <input type="text" name="pais" value="{{ $participante->pais }}" required maxlength="50"><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('participante.index') }}">Volver a la lista</a>
</body>
</html>
