
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp_nombre = depurar($_POST["nombre"]);
    $temp_edad= depurar($_POST["edad"]);
    if (isset($_POST["genero"])) {
        $temp_genero = depurar($_POST["genero"]);
    } else {
        $temp_genero = "";
    }
    $videojuego= ($_POST["videojuego"]);
   

    //VALIDACION DE NOMBRE
    if (empty($temp_nombre)) {
        $err_nombre ="El campo es obligatorio";
    } else {
        $pattern ="/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

        if (!preg_match($pattern, $temp_nombre)) {
            $err_nombre = "El campo solo puede tener letras.";
        }else { 
         $nombre = $temp_nombre;
        }
    }
        //Validacion de genero
        if (empty($temp_genero)) {
            $err_genero = "La consola es obligatoria";
        } else {
            $genero = $temp_genero;
        }
    //VALIDACION DE EDAD
    if(empty($temp_edad)) {
            $err_edad = "EL campo edad es obligatorio";
        } else {
            if(!is_numeric($temp_edad)) {
                $err_edad= "La edad debe ser un numero ";
            }else {
                if ($temp_edad < 0) {
                    $err_edad = "No no puede ser negativo la EDAD";
                }else {
                    $edad =$temp_edad ;
             }
         }
    } 
    
             echo "<p>$nombre </p>";
             echo "<p>$edad</p>";
             echo "<p>$genero</p>";
             echo "<p>$videojuego</p>";
        
}
    

    function depurar($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
?>