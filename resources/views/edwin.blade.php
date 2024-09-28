<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de Estuduantes</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <h1>Lista de Estudiantes</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Programa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->celular }}</td>
                    <td>{{ $estudiante->correo }}</td>
                    <td>{{ $estudiante->programa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
