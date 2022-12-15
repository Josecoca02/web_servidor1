<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php require 'database.php' ?>
    <?php require 'create.php' ?>

    <!-- Crea aquí la tabla que muestre todos los objetos de la BD -->
    <div class="container">
    <h1>Listado de JUEGOS DE MESA</h1>

        <div class="row">
            <div class="col-9">
            <table class="table table-borderless">
                    <thead class="table-dark">
                        <tr>
                            <th>TITULO</th>
                            <th>Edad RECOMENDADA</th>
                            <th>Nº JUGADORES</th>
                            <th>MARCA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $sql = "SELECT * FROM juegos_de_mesa ORDER BY marca ASC, titulo ASC";
                        $resultado = $conexion->query($sql);

                        if ($resultado->num_rows > 0) {

                            while ($row = $resultado->fetch_assoc()) {
                                $id = $row['id'];
                                $titulo = $row["titulo"];
                                $edad_recomendada = $row["edad_recomendada"];
                                $n_jugadores = $row["n_jugadores"];
                                $marca = $row["marca"];

                        ?>
                                <tr>
                                    <td><?php echo $titulo ?></td>
                                    <td><?php echo $edad_recomendada ?></td>
                                    <td><?php echo $n_jugadores ?></td>
                                    <td><?php echo $marca ?></td>
                                </tr>
                        <?php
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