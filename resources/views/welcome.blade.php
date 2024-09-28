<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección con Botones</title>
</head>
<body>
    <form action="{{ route('edwin.view') }}" method="GET">
        <button type="submit">Ir a Estudiantes</button>
    </form>

    <form action="{{ route('docentes.view') }}" method="GET">
        <button type="submit">Ir a Docentes</button>
    </form>
</body>
</html>
