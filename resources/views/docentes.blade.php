<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de Docentes</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

<div class="container">
        <h1>Agregar Docente</h1>


        <form action="{{ route('docentes.store') }}" method="GET">
    @csrf
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
    </div>
    <div>
        <label for="programa">Programa</label>
        <input type="text" name="programa" id="programa" required>
    </div>
    <div>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" required>
    </div>
    <div>
        <label for="celular">Celular</label>
        <input type="text" name="celular" id="celular">
    </div>
    <div>
        <label for="universidad">Universidad</label>
        <input type="text" name="universidad" id="universidad" required>
    </div>
    <button type="submit">Agregar Docente</button>
</form>
    </div>



    <h1>Lista de Docentes</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Programa</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Universidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($docentes as $docente)
                <tr>
                    <td>{{ $docente->id }}</td>
                    <td>{{ $docente->nombre }}</td>
                    <td>{{ $docente->programa }}</td>
                    <td>{{ $docente->correo }}</td>
                    <td>{{ $docente->celular }}</td>
                    <td>{{ $docente->universidad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
