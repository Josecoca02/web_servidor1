
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>compañias</title>
</head>
<body>
     <div class="container">
        <h1> Index de Compañias</h1>
        <a href="{{ route('companias.create') }}" class="btn btn-success">
            Crear compañias
        </a>
        <div class="row">
            <div class="col-12">
                <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Sede</th>
                        <th>fecha de fundacion</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($companias as $compania)
                       <tr class="table table-dark">
                            <td>{{ $compania ->nombre}}</td>
                            <td>{{ $compania ->sede}}</td>
                            <td>{{ $compania ->fecha_fundacion}}</td>
                            <td>
                                <form method="get" action="{{ route('companias.show', ['compania' => $compania -> id]) }}">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                            <td>
                                    <form method="post" action="{{ route('companias.destroy', ['compania' => $compania -> id]) }}">
                                        @csrf 
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Borrar</button>
                                    </form>
                            </td>
                           
                       </tr>
                       @php
                            $videojuegos = $compania -> videojuegos;
                       @endphp
                       @foreach ($videojuegos as $videojuego)
                                <tr class="table table-light">
                                    <td>{{ $videojuego -> titulo  }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                       @endforeach
                       {{-- Comentario BLade--}}
                   @endforeach
                </tbody>
                </table>
            </div>
        </div>

     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>