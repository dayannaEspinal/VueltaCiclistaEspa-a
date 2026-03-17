<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Participante</h1>    

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <a href="{{ route('participante.create') }}">Crear Participante</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Pais</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participantes as $participante)
                <tr>
                    <td>{{ $participante->id }}</td>
                    <td>{{ $participante->nombre }}</td>
                    <td>{{ $participante->edad }}</td>
                    <td>{{ $participante->pais }}</td>
                    <td>
                        <a href="{{ route('participante.show', $participante->id) }}">Ver</a>
                        <a href="{{ route('participante.edit', $participante->id) }}">Editar</a>
                        <form action="{{ route('participante.destroy', $participante->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>