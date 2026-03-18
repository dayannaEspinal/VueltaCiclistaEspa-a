<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Ciclista</title>
</head>
<body>
    <h1>Eliminar Ciclista</h1>

    @php
        
        $id = request()->query('id');
        $ciclista = \App\Models\Ciclista::find($id);
    @endphp

    @if(!$ciclista)
        <p style="color:red;">Ciclista no encontrado.</p>
        <a href="/ciclista">Volver a la lista</a>
    @else
        <p>¿Está seguro que desea eliminar al ciclista <strong>{{ $ciclista->Nombre }}</strong>?</p>

    
        <form action="/ciclista/delet?id={{ $ciclista->IdCiclista }}" method="GET">
            <button type="submit">Si, eliminar</button>
        </form>

        <br>
        <a href="/ciclista">Cancelar y volver a la lista</a>
    @endif
</body>
</html>
