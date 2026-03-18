<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ciclista</title>
</head>
<body>
    <h1>Crear Ciclista</h1>

   
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/ciclista/guardar" method="POST">
        @csrf
        <label>Nombre:</label><br>
        <input type="text" name="Nombre" required maxlength="50"><br><br>

        <label>Nacionalidad:</label><br>
        <input type="text" name="Nacionalidad" maxlength="50"><br><br>

        <label>Fecha de Nacimiento:</label><br>
        <input type="date" name="FechaNacimiento"><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br>
    <a href="/ciclista">Volver a la lista</a>
</body>
</html>
