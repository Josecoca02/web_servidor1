<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usario</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST") {
                $_nombre = $_POST["nombre"];
                $apellidos = $_POST["apellidos"];
                $dni = $_POST["dni"];

                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

                if(preg_match($pattern, $_nombre)) {
                    echo"<p>$nombre sigue el patron </p>"
                }else {
                    echo "<p>$nombre no sigue el patron </p>"
                }
            }


        if()
    ?>
    <form action="" method="post">
        <p>Nombre: 
            <input type="text" name="nombre">
    </p>
    <p>Apellidos:
        <input type="text" name="apellidos">
    </p>
    <p>
    <p>DNI:
        <input type="text" name="dni">
    </p>
    <input type="submit" value="Enviar">
    </p>
</form>

</body>
</html>