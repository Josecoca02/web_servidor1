<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Nueva Prenda</title>
</head>
<body>
<?php require '../../util/control_de_acceso.php' ?>

    <?php
            

         require '../../util/base_de_datos.php';

         if($_SERVER["REQUEST_METHOD"] == "POST") {
             $temp_nombre = depurar($_POST["nombre"]);
             if (isset($_POST["talla"])){
                $temp_talla = depurar($_POST["talla"]);
             } else {
                $temp_talla = "";
             }
             $temp_precio = depurar($_POST["precio"]);
             if (isset($_POST["categoria"])) {
                 $temp_categoria = depurar($_POST["categoria"]);
             } else {
                 $temp_categoria = "";
             }
             $file_name = $_FILES["imagen"]["name"];
             $file_temp_name = $_FILES["imagen"]["tmp_name"];
             $path = "../../resources/images/prendas/" . $file_name;
 
            // PONEMOS LAS RESTRICCIONES
            //NOMBRE
            if (empty($temp_nombre)) {
                $err_nombre = "El Nombre es obligatorio";
            } else {
                if (strlen($temp_nombre) < 50) {
                    $err_nombre = "El Nombre solo puede tener  50 caracteres";
                } else {
                    //  ¡ÉXITO!
                    $nombre = $temp_nombre;
                }
            }
            
            //Precio
        if (empty($temp_precio)) {
            $err_precio = "El precio es obligatorio";
        } else {
            $temp_precio = filter_var($temp_precio, FILTER_VALIDATE_FLOAT);

            if (!$temp_precio) {
                $err_precio = "El precio debe ser un número";
            } else {
                $temp_precio = round($temp_precio, 2);
                if ($temp_precio < 0) {
                    $err_precio = "El precio no puede ser negativo";
                } else if ($temp_precio >= 10000) {
                    $err_precio = "El precio no puede ser igual o superior a 10000";
                } else {
                    //  ¡ÉXITO!
                    $precio = $temp_precio;
                }
            }
        }
            //TALLA
        if (empty($temp_talla)) {
            $err_talla = "La Categoria es obligatoria";
        } else {
            $talla = $temp_talla;
        }

        //CATEGORIA 
        if (empty($temp_categoria)) {
            $err_categoria = "La Categoria es obligatoria";
        } else {
            $categoria = $temp_consolas;
        }



            
             if (!empty($temp_nombre) && !empty($temp_talla) && !empty($temp_precio)) {
                 //  Subimos la imagen a la carpeta deseada
                 if (move_uploaded_file($file_temp_name, $path)) {
                     echo "<p>Fichero movido con éxito</p>";
                 } else {
                     echo "<p>No se ha podido mover el fichero</p>";
                 }
 
                 //  Insertamos la prenda en la base de datos
                 $imagen = "/resources/images/prendas/" . $file_name;
                 if (!empty($categoria)) {
                     $sql = "INSERT INTO prendas (nombre, talla, precio, categoria, imagen)
                         VALUES ('$temp_nombre', '$temp_talla', '$temp_precio', '$temp_categoria', '$imagen')";
                 } else {
                     $sql = "INSERT INTO prendas (nombre, talla, precio, imagen)
                         VALUES ('$temp_nombre', '$temp_talla', '$temp_precio', '$imagen')";
                 }
                 
 
                 if ($conexion -> query($sql) == "TRUE") {
                 ?>
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                         Se ha insertado la prenda
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                 <?php
                 } else {
                     echo "<p>Error al insertar</p>";
                 }
             }
         }
         function depurar($dato) {
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }
     ?>
 
     <div class="container">
         <?php require '../header.php' ?>
         <br>
         <h1>Nueva Prenda</h1> 
         
         <div class="row">
             <div class="col-6">
                 <form action="" method="post" enctype="multipart/form-data">
                     <div class="form-group mb-3" >
                         <label class="form-label">Nombre</label>
                         <input class="form-control" type="text" name="nombre">
                        <span class="error">
                            <?php if(isset($err_nombre)) echo $err_nombre ?>
                    </span>
                     </div>
                     <div class="form-group mb-3">
                         <label class="form-label">Talla</label>
                         <select class="form-select" name="talla">
                             <option value="" selected disabled hidden>-- Selecciona la talla --</option>
                             <option value="XS">XS</option>
                             <option value="S">S</option>
                             <option value="M">M</option>
                             <option value="L">L</option>
                             <option value="XL">XL</option>
                         </select>
                         <span class="error">
                            * <?php if (isset($err_talla)) echo $err_talla ?>
                        </span>
                     </div>
                     <div class="form-group mb-3">
                         <label class="form-label">Precio</label>
                         <input class="form-control" type="text" name="precio">
                         <span class="error">
                            * <?php if (isset($err_precio)) echo $err_precio ?>
                        </span>
                     </div>
                     <div class="form-group mb-3">
                         <label class="form-label">Categoría</label>
                         <select class="form-select" name="categoria">
                             <option value="" selected disabled hidden>-- Selecciona la categoría --</option>
                             <option value="CAMISETAS">Camisetas</option>
                             <option value="PANTALONES">Pantalones</option>
                             <option value="ACCESORIOS">Accesorios</option>
                         </select>
                         <span class="error">
                            * <?php if (isset($err_categoria)) echo $err_categoria ?>
                        </span>
                     </div>
                     <div class="form-group mb-3">
                         <label class="form-label">Imagen</label>
                         <input class="form-control" type="file" name="imagen">
                     </div>
                     <button class="btn btn-primary" type="submit">Crear</button>
                     <a class="btn btn-secondary" href="index.php">Volver</a>
                 </form>
             </div>
         </div>
     </div>
 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 </body>
 </html>