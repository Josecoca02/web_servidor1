<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    

    <p>{{ $mensaje}}</p>


    <div class="container">
        <a href="{{ route('videojuegos.create')}}" class="btn btn-success">Crear Videojuego</a>

        <div class="row">
            <div class="col-3">
                <label class="form-label">Buscar por titulo</label>
            </div>
            <div class="col-6">
                <input class="form-control" type="text" name="titulo">
            </div>
            <div class="col-2">
                <button class="btn btn-secondary" type="submit">Buscar</button>
            </div>
                
        <div class="row">
            <div class="col-12">
                <table class="table">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Precio</th>
                        <th>Pegi</th>
                        <th>Descripción</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videojuegos as $videojuego)
                            <tr>
                                <td>{{ $videojuego -> titulo }}</td>
                                <td>{{ $videojuego -> precio }}</td>
                                <td>{{ $videojuego -> pegi }}</td>
                                <td>{{ $videojuego -> descripcion }}</td>
                                <td>
                                    <form method="get" action="{{ route('videojuegos.show', ['videojuego' => $videojuego -> id]) }}">
                                        <button class="btn btn-primary" type="submit">Ver</button>
                                    </form>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('videojuegos.destroy', ['videojuego' => $videojuego -> id]) }}">
                                        @csrf 
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            {{-- Comentario Blade --}}
                   @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>