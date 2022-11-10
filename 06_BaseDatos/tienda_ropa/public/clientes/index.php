<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Clientes</title>
</head>
<body>
<div class="container">
        <?php require '../../util/base_de_datos.php' ?>
        <?php require '../header.php' ?>
        <br>
        <h1>Listado de Clientes</h1>

        <div class="row">
            <div class="col-9">
                <br>
                <a class="btn btn-primary" href="insertar_clientes.php">Insertar Nuevo Cliente</a>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>fecha nacimiento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php   //  Borrar prenda 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $id = $_POST["id"];
                                //CONSULTA PARA COGER LA RUTA DE LA IMAGEN Y BORRARLA
                                $sql = "SELECT imagen FROM clientes WHERE id = '$id'";
                                $resultado = $conexion -> query($sql);

                                if ($resultado -> num_rows > 0) {
                                    while($fila = $resultado -> fetch_assoc()) {
                                        $imagen = $fila["imagen"];
                                        
                                    }
                                    unlink("../.." . $imagen);
                                }

                                //CONSULTA PARA BORRAR LA PRENDA DE LA BASE DE DATOS
                                $sql = "DELETE FROM clientes WHERE id = '$id'";

                                if ($conexion -> query($sql)) {
                                ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Se ha borrado el cliente
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                } else {
                                    echo "<p>Error al borrar</p>";
                                }
                            }
                        ?>

                        <?php       //  Seleccionar todas las clientes
                            $sql = "SELECT * FROM clientes ";
                            $resultado = $conexion -> query($sql);

                            if ($resultado -> num_rows > 0) {
                                while ($fila = $resultado -> fetch_assoc()) {
                                    $usuario = $fila["usuario"];
                                    $nombre = $fila["nombre"];
                                    $apellido_1 = $fila["apellido_1"];
                                    $apelldo_2 = $fila["apellido_2"];
                                    $fecha_nacimiento = $fila["fecha_nacimiento"];
                                   
                                    ?>
                                    <tr>
                                        <td><?php echo $usuario ?></td>
                                        <td><?php echo $nombre ?></td>
                                        <td><?php echo $apellido_1 ?></td>
                                        <td><?php echo $apelldo_2 ?></td>
                                        <td><?php echo $fecha_nacimiento ?></td>
                                        <td>
                                            <form action="mostrar_clientes.php" method="get">
                                                <button class="btn btn-primary" type="submit">Ver</button>
                                                <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="" method="post">
                                                <button class="btn btn-danger" type="submit">Borrar</button>
                                                <input type="hidden" name="id" value="<?php echo $fila["id"] ?>">
                                            </form>
                                        </td>
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>