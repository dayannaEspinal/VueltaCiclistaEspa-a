<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Prueba</title>
</head>
<body>
    <h1>Eliminar Prueba</h1>

    @if(!$prueba)
        <p style="color:red;">Prueba no encontrada.</p>
        <a href="{{ route('prueba.index') }}">Volver a la lista</a>
    @else
        <p>¿Está seguro que desea eliminar la prueba <strong>{{ $prueba->nombre }}</strong>?</p>

        <form action="{{ route('prueba.destroy', $prueba->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Sí, eliminar</button>
        </form>

        <br>
        <a href="{{ route('prueba.index') }}">Cancelar y volver a la lista</a>
    @endif
</body>
</html>
