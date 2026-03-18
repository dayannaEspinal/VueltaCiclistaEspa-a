<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Equipo</title>
</head>
<body>
    <h1>Eliminar Equipo</h1>

    @if(!$equipo)
        <p style="color:red;">Equipo no encontrado.</p>
        <a href="/equipo">Volver a la lista</a>
    @else
        <p>¿Esta seguro que desea eliminar al equipo <strong>{{ $equipo->nombre }}</strong>?</p>

        <form action="/equipo/{{ $equipo->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Si, eliminar</button>
        </form>

        <br>
        <a href="/equipo">Cancelar y volver a la lista</a>
    @endif
</body>
</html>
