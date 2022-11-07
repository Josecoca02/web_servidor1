<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica_02</title>
</head>
<body>
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp_dni = depurar($_POST["dni"]);
            $temp_nombre = depurar($_POST["nombre"]);
            $temp_primerapellido = depurar($_POST["primerapellido"]);
            $temp_segundoapellido = depurar($_POST["segundoapellido"]);
            $temp_edad = depurar($_POST["edad"]);
            $temp_email = depurar($_POST["email"]);

            //  Validación del DNI
            if (empty($temp_dni)) {
                $err_dni = "El DNI es obligatorio";
            } else {
                $pattern = "/^[0-9]{8}[a-zA-Z]$/";
    
                 if (!preg_match($pattern, $temp_dni)) {
                    $err_dni = "El DNI tiene 8 dígitos y un carácter";
                    } else {
                        $dni = $temp_dni;
                    }
                }
               
    
          
            //VALIDAMOS EL NOMBRE PARA QUE SOLO PUEDA TENER LETRAS Y NADA MAS
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

            //VALIDACION DE 1 APELLIDO.
            if(empty($temp_primerapellido)) {
                $err_primerapellido ="El campo es obligatorio";
            } else {
                $pattern ="/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

                if (!preg_match($pattern, $temp_primerapellido)) {
                    $err_primerapellido = "El campo solo puede tener letras";

                }else {
                    if (strlen($temp_nombre) > 30) {
                        $err_nombre = "El nombre no puede tener más de 30 caracteres";
                    } else {
                        //  ÉXITO
                        $primerapellido = $temp_primerapellido;
                        
                    }
                }
            }
             //VALIDACION DEL 2 APELLIDO.
            if(empty($temp_segundoapellido)) {
                $err_segundoapellido ="El campo es obligatorio";
            } else {
                $pattern ="/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/";

                if (!preg_match($pattern, $temp_segundoapellido)) {
                    $err_segundoapellido = "El campo solo puede tener letras";

                }else {
                    $segundoapellido = $temp_segundoapellido ;
                    
                }
            }
            //VALIDACION DE EDAD
            if(empty($temp_edad)) {
                $err_edad = "EL campo edad es obligatorio";
            } else {
                if(!is_numeric($temp_edad)) {
                    $err_edad= "La edad debe ser un numero ";
                }
                $edad =$temp_edad ;
                
            }

            //VALIDACION DE EMAIL
           // NO ponemos una restricción a la longitud del email porqque es una email y se mira desde la base de datos

            if(empty($temp_email)) {
                $err_email = "El campo email es obligatorio";
                $string1 = 'caca';
           $string2 = 'pedo';
           $string3 = 'ano';
            }else {
                if (str_contains($temp_email , $string1 && $string2 && $string3)) 
                    $email != $temp_email;
                    $err_email= "Hay palabras que son  mal sonantes";
                
                $temp_email = filter_var($temp_email, FILTER_VALIDATE_EMAIL);

                if(!$temp_email){
                    $err_email ="El email no es  correcto";
                }else{
                    $email= $temp_email;
                    
                }
            }

            if (isset($dni) &&  isset($nombre) && 
            isset($primerapellido) && isset($segundoapellido) && 
            isset($edad) && isset($email)) {

            echo "<p>$dni </p>";
            echo "<p>$nombre</p>";
            echo "<p>$primerapellido</p>";
            echo "<p>$segundoapellido</p>";
            echo "<p>$edad</p>";
            echo "<p>$email</p>";
        }

        
    }

    function depurar($dato) {
        $dato = trim($dato);
        $dato = stripslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <p>DNI: 
            <input type="text" name="dni">
            <span class="error">
                 <?php if(isset($err_dni)) echo $err_dni ?>
            </span>
        </p>

            <label>NOMBRE </label>
                <input type="text" name="nombre">
                <span class="error">
                 <?php if(isset($err_nombre)) echo $err_nombre ?>
            </span>
            
            <p>PRIMER APELLIDO :
                <input type="text" name="primerapellido"><br><br>
                <span class="error">
                 <?php if(isset($err_primerapellido)) echo $err_primerapellido ?>
            </span>
            </p>
            <p>SEGUNDO APELLIDO:
            <input type="text" name="segundoapellido"><br><br>
            <span class="error">
                 <?php if(isset($err_segundoapellido)) echo $err_segundoapellido ?>
            </span>
            </p>
            <p >EDAD:
                 <input type="text" name="edad"><br><br>
                 <span class="error">
                 <?php if(isset($err_edad)) echo $err_edad ?>
            </span>
            </p> 
            <p>Email:
            <input type="text" name="email"><br><br>
            <span class="error">
                 <?php if(isset($err_email)) echo $err_email ?>
            </span>
            </p>
            <p>
            <input type="submit" value="Enviar">
            </p>
        </form>


</body>
</html>