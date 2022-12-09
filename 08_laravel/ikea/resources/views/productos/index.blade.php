{{-- @foreach($productos as $producto)
        <li>{{ $producto -> nombre }} - {{ $producto -> categoria -> nombre }}</li> --}}
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Index de Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-success">
            Crear Productos
        </a>
        
        <div class="row">
            <div class="col-12">
                <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>fecha_lanzamiento</th>
                        <th>Descripción</th>
                        
                    </tr>
                </thead>
                <tbody>
                   @foreach ($productos as $producto)
                       <tr>
                            <td>{{ $producto->nombre}}</td>
                            <td>{{ $producto->precio}}</td>
                            <td>{{ $producto->fecha_lanzamiento}}</td>
                            <td>{{ $producto->descripcion}}</td>
                            <td>
                                <form method="get" action="{{ route('productos.show', ['producto' => $producto -> id]) }}">
                                    <button class="btn btn-primary" type="submit">Ver</button>
                                </form>
                            </td>
                            <td>
                                    <form method="post" action="{{ route('productos.destroy', ['producto' => $producto -> id]) }}">
                                        @csrf 
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Borrar</button>
                                    </form>
                            </td>
                       </tr>
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