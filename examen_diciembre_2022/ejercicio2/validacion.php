<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp_titulo = depurar($_POST["titulo"]);
        if (isset($_POST["edad_recomendada"])) {
            $temp_edad_recomendada = depurar($_POST["edad_recomendada"]);
        } else {
            $temp_edad_recomendada = "";
        }
        $temp_n_jugadores= depurar($_POST["n_jugadores"]);
        $temp_marca= depurar($_POST["marca"]);


        //VALIDACION DE titulo
        if (empty($temp_titulo)) {
            $err_titulo ="El campo titulo es obligatorio";
        } else {
            $pattern ="/^[a-zA-Z0-9]+[ a-zA-Z0-9-áéíóúÁÉÍÓÚñÑ]+$/";

            if (!preg_match($pattern, $temp_titulo)) {
                $err_titulo = "El campo solo puede tener letras.";
            }else { 
            $titulo = $temp_titulo;
            }
        }
            //Validacion de edad_recomendada
            if (empty($temp_edad_recomendada)) {
                $err_edad_recomendada = "El edad recomenda es obligatorio";
            } else {
                $edad_recomendada =$temp_edad_recomendada;
            }
        //VALIDACION DE N_JUGADORES
        if(empty($temp_n_jugadores)) {
                $err_n_jugadores = "EL campo  es obligatorio";
            } else {
                if(!is_numeric($temp_n_jugadores)) {
                    $err_n_jugadores= "EL numero de jugadores debe  ser un numero ";
                }else {
                    if ($temp_n_jugadores < 0) {
                        $err_n_jugadores = "No puede ser negativo Numero de jugadores";
                    }else if ($temp_n_jugadores > 99){
                        $err_n_jugadores = "No puede ser mayor a 99  Numero de jugadores";
                }else{
                    $n_jugadores =$temp_n_jugadores ;
                }
            }
        }  
                //VALIDACION DE Marca
                if (empty($temp_marca)) {
                    $err_marca ="El campo es obligatorio";
                } else {
                    $pattern ="/^[a-zA-Z0-9]+[ a-zA-Z0-9-áéíóúÁÉÍÓÚñÑ]+$/";

                    if (!preg_match($pattern, $temp_marca)) {
                        $err_marca = "El campo solo puede tener letras.";
                    }else { 
                    $marca = $temp_marca;
                    }
                }
                
                if (isset($titulo) && isset($edad_recomendada) && isset($n_jugadores) &&
                isset($marca)) {

                    echo "<p>$titulo</p>";
                    echo "<p>$edad_recomendada</p>";
                    echo "<p>$n_jugadores</p>";
                    echo "<p>$marca</p>";
            }
            
        }


        function depurar($dato) {
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }
?>
