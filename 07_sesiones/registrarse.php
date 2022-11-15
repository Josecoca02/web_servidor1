<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Registrarse</title>
</head>
<body>
            <?php
        require 'base_de_datos.php';
            ?>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")  {
                $usuario = $_POST["usuario"];
                $contrasena = $_POST["contrasena"];
                $nombre = $_POST["nombre"];

                $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
                echo "<p>USUARIO: $usuario</p>";
                echo "<p>CONTRASEÑA: $contrasena</p>";
                echo "<p>NOMBRE: $nombre</p>";
                echo "<p>Hash: $hash_contrasena</p>";

            $sql =" INSERT INTO usuarios (usuario, contrasena, nombre)
                        VALUES ('$usuario', '$hash_contrasena', '$nombre')";
                    
                if($conexion -> query($sql) == "TRUE") {
                    echo "<p>Usuario Registrado</p>" ;

                }else{
                    echo "<p>Usuario no registrado</p>";
                }

            }
            ?>
    <div class="container">
        <h1>Registrare</h1>

        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label class="form-label">Usuario</label>
                        <input class="form-control" name="usuario" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Contraseña</label>
                        <input class="form-control" name="contrasena" type="password">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>