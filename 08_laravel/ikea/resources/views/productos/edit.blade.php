<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Editar Productos</h1>

        <div class="row">
            <div class="col-9">
                <form method="POST" action="{{route('productos.update', ['producto' => $producto -> id]) }}">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="Nombre" value="{{ $producto->Nombre }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Precio</label>
                        <input class="form-control" type="number" name="precio" value="{{ $producto->precio }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Fecha Lanzamiento</label>
                        <input class="form-select" name="fecha_lanzamiento" value="{{ $producto->fecha_lanzamiento }}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Categoria</label>
                        <select class="form-select" name="categoria_id">
                        @foreach($categorias as $categoria)
                            <option value="{{ $caegoria -> id }}">
                                {{ $categoria -> nombre }}
                            </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class=form-control name="descripcion">{{ $producto->descripcion }}</textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>