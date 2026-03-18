<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Participante</title>
</head>
<body>
    <h1>Eliminar Participante</h1>

    @if(!$participante)
        <p style="color:red;">Participante no encontrado.</p>
        <a href="{{ route('participante.index') }}">Volver a la lista</a>
    @else
        <p>¿Está seguro que desea eliminar al participante <strong>{{ $participante->nombre }}</strong>?</p>

        <form action="{{ route('participante.destroy', $participante->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Sí, eliminar</button>
        </form>

        <br>
        <a href="{{ route('participante.index') }}">Cancelar y volver a la lista</a>
    @endif
</body>
</html>
