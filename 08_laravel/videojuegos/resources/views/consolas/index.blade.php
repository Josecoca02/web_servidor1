<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consolas</title>
</head>
<body>
    <h1>Index de consolas</h1>

    <p>{{ $mensaje }}</p>

    <ul>
        @foreach($consolas as $consola)
            <li>{{ $consola }}</li>
        @endforeach
    </ul>

    @php
        $hola = "Hola mundo";
    @endphp

    <p>{{ $hola }}</p>
</body>
</html>