<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Ciclista</title>
</head>
<body>
    <h1>Eliminar Ciclista</h1>

    @if(!$ciclista)
        <p style="color:red;">Ciclista no encontrado.</p>
        <a href="{{ route('ciclista.index') }}">Volver a la lista</a>
    @else
        <p>¿Está seguro que desea eliminar al ciclista <strong>{{ $ciclista->nombre }}</strong>?</p>

        <form action="{{ route('ciclista.destroy', $ciclista->id_ciclistas) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Sí, eliminar</button>
        </form>

        <br>
        <a href="{{ route('ciclista.index') }}">Cancelar y volver a la lista</a>
    @endif
</body>
</html>
