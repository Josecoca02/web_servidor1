<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Compañias Crear</title>
</head>
<body>
    <div class="container">
        <h1>Crear Compañias</h1>
        <div class="row">
            <div class="col-9">
                <form method="post" action="{{ route('companias.store') }}"> {{--se pone la ruta para que el inset del formulario se haga en el videojuegoscontroller store y sabemoes la ruta gracias al php artisan route:list--}}
                    @csrf {{-- protege la imformacion --}}
                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Sede</label>
                        <input class="form-control" type="text" name="sede">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Fecha fundacion</label>
                        <input class="form-control" type="text" name="fecha_fundacion">
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>