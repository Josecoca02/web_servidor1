<h1>Respueta Formulario 3</h1>

<?php
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
        echo "<p> La edad no es VALIDO</p>";
    }
?>
