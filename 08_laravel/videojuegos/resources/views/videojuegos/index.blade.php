<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<div class="container"> 
    <h1>Index de Videojuegos</h1>

    
    <p>{{$mensaje}}</p>

    <a href="{{ route('videojuegos.create') }}" class="btn btn-success">Crear videojuego</a>



    <div class="row">

        

        <div class="col-9">
            <table class="table">
                <thead>
                    <tr>
                        <th>TITULO</th>
                        <th>Precio</th>
                        <th>PEGI</th>
                        <th>Descripción</th>
                    </tr>        
                </thead>
                <tbody>
                    @foreach ($videojuegos as $videojuego)
                        <tr>
                            <td>{{$videojuego -> titulo}}</td>
                            <td>{{$videojuego -> precio}}</td>
                            <td>{{$videojuego -> pegi }}</td>
                            <td>{{$videojuego -> descripcion}}</td>
                        
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>