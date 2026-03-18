<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ciclista</title>
</head>
<body>
    <h1>Editar Ciclista</h1>

    
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/ciclista/update" method="POST">
        @csrf
       
        <input type="hidden" name="IdCiclista" value="{{ $ciclista->IdCiclista }}">

        <label>Nombre:</label><br>
        <input type="text" name="Nombre" value="{{ $ciclista->Nombre }}" required maxlength="50"><br><br>

        <label>Nacionalidad:</label><br>
        <input type="text" name="Nacionalidad" value="{{ $ciclista->Nacionalidad }}" maxlength="50"><br><br>

        <label>Fecha de Nacimiento:</label><br>
        <input type="date" name="FechaNacimiento" value="{{ $ciclista->FechaNacimiento }}"><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br>
    <a href="/ciclista">Volver a la lista</a>
</body>
</html>
