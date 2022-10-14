<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="sytless.css" />
</head>
<body>
    <h2>Nuevo videojuego</h2>
    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp_titulo = depurar($_POST["titulo"]);
            $temp_precio = depurar($_POST["precio"]);
            $temp_descripcion = depurar($_POST["descripcion"]);

            if (empty($temp_titulo)) {
                $err_titulo = "El título es obligatorio";
                // VALIDAR QUE TENGA COMO MUCHO TENGA 40 CARACTERES
            } else {
                if(strlen($temp_titulo) > 40) {
                    $err_titulo = "El titulo no puede tener más de 40 caracteres";
                } else {
                    //¡EXITO!
                    $titulo = $temp_titulo;
                }
            }
            if (empty($temp_descripcion)) {
                $err_descripcion = "La descripcion  es obligatorio";
                // VALIDAR QUE TENGA COMO MUCHO TENGA 40 CARACTERES
            } else {
                if(strlen($temp_descripcion) > 255) {
                    $err_descripcion = "La descrición no puede tener más de 255 caracteres";
                } else {
                    //¡EXITO!
                    $descripcion = $temp_descripcion;
                }
            }

            if (empty($temp_precio)) {
                $err_precio = "El precio es obligatorio";
            }else {
                $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);
                if (!$temp_precio) {
                    
                    $err_precio= "El precio deber ser un número";
                }else {
                    $temp_precio = round($temp_precio, 2);
                    if($temp_precio < 0){
                        $err_precio = "El precio no puede ser negativo";
                    }else if ($temp_precio >= 10000) {
                        $err_precio ="El precio no puede ser igual o  superior a 10000";
                    }else {
                        //¡EXITO!
                       $precio = $temp_precio;
                    }

                }
            }
        }

        if (isset($titulo) && isset($precio) && isset($descripcion)) {
            echo"<p>$titulo</p>";
            echo "<p>$precio</p>";
            echo "<p>$descripcion</p>";
        }

        function depurar($dato) {
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }
    ?>
    <form action="" method="post">
        <p>Título: <input type="text" name="titulo">
            <span class="error">
                * <?php if(isset($err_titulo)) echo $err_titulo ?>
            </span>
        </p>
        <p>Precio: <input type="text" name="precio">
            <span class="error">
                * <?php if(isset($err_precio)) echo $err_precio ?>
            </span>
        </p>
        <p>Descripcion: <input type="text" name="descripcion">
            <span class="error">
                * <?php if(isset($err_descripcion)) echo $err_descripcion ?>
            </span>
        </p>
        <p><input type="submit" value="Crear"></p>
    </form>
</body>
</html>