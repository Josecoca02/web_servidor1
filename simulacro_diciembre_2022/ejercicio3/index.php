<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php require 'database.php' ?>

    <!-- Crea aquí la tabla que muestre todos los objetos de la BD -->

    <div class="container">
    <h1>Listado de Personajes</h1>

        <div class="row">
            <div class="col-9">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Genero</th>
                            <th>Titulo Videojuego</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //ORDER BY TITULO ASC , NOMBRE PARA ORDENAR LA TABLA
                        $sql = "SELECT * FROM personajes ORDER BY titulo ASC, nombre ASC ";
                        $resultado = $conexion -> query($sql);

                        if ($resultado -> num_rows > 0) {
                            while ($fila = $resultado -> fetch_assoc()) {
                                $nombre = $fila["nombre"];
                                $edad = $fila["edad"];
                                $genero = $fila["genero"];
                                $titulo = $fila["titulo"];
                                ?>
                                <tr>
                                    <td><?php echo $nombre ?></td>
                                    <td><?php echo $edad ?></td>
                                    <td><?php echo $genero ?></td>
                                    <td><?php echo $titulo ?></td>
                                </tr>
                                <?php

                                /*  CUANDO SE PULSE EN UN USUARIO
                                    SE MOSTRARÁN LAS COMPRAS DE ESE
                                    USUARIO Y EL TOTAL QUE HA GASTADO
                                    (EN UN FICHERO NUEVO)
                                */
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>