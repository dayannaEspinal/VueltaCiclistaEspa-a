<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Participacion</title>
</head>
<body>
    <h1>Editar Participacion</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('participa.update', $participa->id_participa) }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID Equipo:</label><br>
        <input type="number" name="id_equipo" value="{{ $participa->id_equipo }}" required><br><br>

        <label>ID Prueba:</label><br>
        <input type="number" name="id_prueba" value="{{ $participa->id_prueba }}" required><br><br>

        <label>Fecha Inicio:</label><br>
        <input type="date" name="fecha_inicio" value="{{ $participa->fecha_inicio }}" required><br><br>

        <label>Fin Contrato:</label><br>
        <input type="date" name="fin_contrato" value="{{ $participa->fin_contrato }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="{{ route('participa.index') }}">Volver a la lista</a>
</body>
</html>
