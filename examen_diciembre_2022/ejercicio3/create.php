<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>EJERCICIO3</title>
</head>
<body>
    <?php
    require './database.php';
        //  Escribe aquí el código para insertar en la BD
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titulo = $_POST["titulo"];
            $edad_recomendada = $_POST["edad_recomendada"];
            $n_jugadores= $_POST["n_jugadores"];
            $marca= $_POST["marca"];
    
            if (!empty($titulo) && !empty($edad_recomendada) && !empty($n_jugadores)&& !empty($marca));

                      //  Insertamos la prenda en la base de dato

                      $sql = "INSERT INTO juegos_de_mesa (titulo, edad_recomendada, n_jugadores, marca)
                      VALUES ('$titulo', '$edad_recomendada', '$n_jugadores', '$marca')";
                        if ($conexion -> query($sql) == "TRUE") {
                        ?>
                        <div class="alert alert-success" role="alert">
                            Se ha insertado personaje 
                          </div>
                        <?php
                        } else {
                        echo "<p>Error al insertar</p>";
                     }
}
    ?>

    <!-- Escribe aquí el formulario para introducir los datos a insertar en la BD -->

    <div class="container">

<br>
<h1>NUEVO JUEGO DE MESA</h1> 

<div class="row">
    <div class="col-6">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3" >
                <label class="form-label">TITULO</label>
                <input class="form-control" type="text" name="titulo">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Edad RECOMENDADA</label>
                <input class="form-control" type="text" name="edad_recomendada">
            </div>
            <div class="form-group mb-3" >
                <label class="form-label">Nº JUGADORES</label>
                <input class="form-control" type="text" name="n_jugadores">
            </div>
            <div class="form-group mb-3" >
                <label class="form-label">Marca</label>
                <input class="form-control" type="text" name="marca">
            </div>
            <button class="btn btn-primary" type="submit">Crear</button>
        </form>
    </div>
</div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>