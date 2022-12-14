<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <?php require './database.php' ?>

    <h1>Listado de países</h1>
    <table class="table">
    
        <tr class="table-info">
            <th>País</th>
            <th>Continente</th>
            <th>Población</th>
            <th></th>
        </tr>
        <tbody>
        

        

                     <?php
                           if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $id = $_POST["id"];
                            //CONSULTA PARA BORRAR paise DE LA BASE DE DATOS
                            $sql = "DELETE  FROM paises WHERE id = $id";
                            if ($conexion -> query($sql)) {
                                ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Se ha borrado el Pais
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Error al borrar el Pais
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                            }
                     }


        $sql = "SELECT * FROM paises";
        $resultado = $conexion -> query($sql);
        
        if ($resultado -> num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
            ?>
            <tr class="table-warning">
                <td><?php echo $row["pais"] ?></td>
                <td><?php echo $row["continente"] ?></td>
                <td><?php echo $row["poblacion"] ?></td>
                <td>
                <form action="" method="post">
                     <button class="btn btn-danger" type="submit">Borrar</button>
                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                </form>
                </td>
            </tr>
            <?php
            }
        } else {
            echo "No se han encontrado paises";
        }      
        ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
