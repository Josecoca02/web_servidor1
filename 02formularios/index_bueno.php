<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
<h1> Ejercicios de la clase de formularios </h1>
<div>
        <h2>Ejercicio 1</h2>
        <p>Formulario que reciba un nombre y una edad y los muestre por pantalla</p>
        <form action="" method="post">
            <label>Nombre</label><br>
            <input type="text" name="nombre"><br><br>
            <label>Edad</label><br>
            <input type="text" name="edad"><br><br>
            <input type="hidden" name="f" value="ej1">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej1") {
                    $nombre= $_POST["nombre"];
                    $edad= $_POST["edad"];
                
                    echo "<p>$nombre</p>";
                    echo "<p>$edad</p>";
                }
            }
        ?>
    </div>
    <div>
        <h2>Ejercicio 2</h2>
        <p>Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya indicado</p>
        <form action="" method="post">
        <label>Numero </label><br>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej2") {
                    $n= $_POST["numero"];
                    for($i = 1; $i <= $n; $i++) {
                        echo "<li>$i</li>";
                    }
                }
            }
        ?>

        </div>
<div>
        <h2>Ejercicio 3</h2>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y
muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
a su edad. Además:
- Convertir la edad a un número entero
- Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula
</p>
        <form action="" method="post">
        <label>Nombre </label><br>
        <input type="text" name="nombre"><br><br>
         <label>Edad </label><br>
        <input type="text" name="edad"><br><br>
        <input type="submit" value="Enviar">
        <input type="hidden" name="f" value="ej3">
       
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej3") {
                    $nombre = $_POST["nombre"];
                    $edad = $_POST["edad"];
                    $integer = intval($edad);
                    $nombre = ucwords(strtolower($nombre));
                
                    if ($edad < 18 && $edad >=0) {
                        echo "<p>$nombre Usted es Menor</p>";
                    } else if ($edad >=18 && $edad <=65) {
                        echo "<p>$nombre Usted es Adult@</p>";
                    } else if ($edad > 65 && $edad <130){
                        echo ("<p>$nombre Usted es un Jubilad@ jugoso<(p>");
                    }else{
                        echo "<p> La edad no es VALIDO </p>";
                    }
                    }
                }
            
        ?>
        <div>
        <h2>Ejercicio 4</h2>
        <p> Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
en un encabezado de dicho número.

Si introducimos "5" y "Hola mundo" se mostrará un encabezado </p>
        <form action="" method="post">
        <label>Frase </label><br>
    <input type="text" name="frase"><br><br>
    <label>Encabezado </label><br>
    <input type="text" name="encabezado"><br><br>
    <input type="submit" value="Enviar">
        <input type="hidden" name="f" value="ej4">
       
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej4") {
                    $frase = $_POST["frase"];
                    $e = $_POST["encabezado"];
                
                    echo "<h$e>$frase</h$e>";
                
                    //echo "<h" . $e . ">" . $frase . "</h" . $e . ">";
                
                }
            }
        ?>

        </div>
        <div>
        <h2 id ="ej5">Ejercicio 5</h2>
        <p>Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. </p>
        <form action="#ej5" method="post">
        <label>Base </label><br>
        <input type="text" name="base"><br><br>
        <label>Exponente </label><br>
        <input type="text" name="exponente"><br><br>
        <input type="hidden" name="f" value="ej5">
        <input type="submit" value="Enviar">
        
       
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej5") {
                    require 'funciones/potencia.php';
                    $base = $_POST["base"];
                    $exponente = $_POST["exponente"];
                    $resultado = potencia($base, $exponente);
                    if ($resultado == -1) {
                        echo "<p>El número no puede ser negativo</p>";
                    } else {
                        echo "<p>El resultado es $resultado</p>";
                    }
                }
            }
        ?>

        </div>

        <div>
        <h2 id="ej6">Ejercicio 6</h2>
        <p>FACTORIAL DE UN Numero</p>
        <form action="#ej6" method="post">
        <label>Numero </label><br>
        <input type="text" name="numero"><br><br>
        <input type="submit" value="Enviar">
        <input type="hidden" name="f" value="ej6">
        
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["f"] == "ej6") {
                  require 'funciones/factorial.php';
                  $numero = $_POST["numero"];
                  $resultado = factorial($numero);
                  echo "<p> El resultado es $resultado</p>";
                }
            }
        ?>

        </div>
        
        <div>
        <h2 id="ej8">Ejercicio 8</h2>
        <p>FACTORIAL DE UN Numero</p>
        <form action="#ej8" method="post">
        <label>Numero </label><br>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="ej8">
        <input type="submit" value="Enviar">
        
        </form>
        <?php
        
                    $numero = $_POST["numero"];
                    echo"<table>";
                    echo "<tr><th>Tabla del $numero </th></tr>";
                    for($i=1; $i <=12; $i++){
                        echo"<tr>";
                        echo "<td>$numero x $i</td>";
                        echo "<td>" . $numero * $i . "</td>";
                        echo "</tr>";
                    }
                    echo"</table>";
                    
                    
                
            
        ?>

        </div>
            
</body>
</html>