<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Clientes</title>
</head>
<body>
<div class="container">
        <?php require '../../util/base_de_datos.php' ?>
        <?php require '../header.php' ?>

        <h1>Ver Cliente</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];

            $sql = "SELECT * FROM clientes WHERE id = '$id'";

            $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while ($fila = $resultado -> fetch_assoc()) {
                    $usuario = $fila["usuario"];
                    $nombre = $fila["nombre"];
                    $apellido_1 = $fila["apellido_1"];
                    $apellido_2 = $fila["apellido_2"];
                    $fecha_nacimiento = $fila["fecha_nacimiento"];
                }
            }
        }
        ?>

        
<div class="row">
            <div class="col-4">
                <p>Usuario: <?php echo $usuario ?></p>
                <p>Nombre: <?php echo $nombre ?></p>
                <p>Primer Apellido: <?php echo $apellido_1 ?></p>
                <p>Segundo Apellido: <?php echo $apellido_2 ?></p>
                <p>Fecha Nacimiento: <?php echo $fecha_nacimiento ?></p>
                <a class="btn btn-secondary" href="index.php">Volver</a>
                <form action="editar_prendas.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="usuario" value="<?php echo $usuario ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                    <input type="hidden" name="apellido_1" value="<?php echo $apellido_1 ?>">
                    <input type="hidden" name="apelldio_2" value="<?php echo $apellido_2 ?>">
                    <input type="hidden" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento ?>">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
 </div>
    

</body>
</html>