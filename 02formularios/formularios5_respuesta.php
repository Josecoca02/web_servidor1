<h1>Ejercicio5</h1>
<?php
    $base = $_GET["base"];
    $exponente =$_GET["exponente"];
    $resultado;

    for($i =1; $i<=$exponente; $i++);  
    $resultado =1;
    for ($i =1 ; $i<=$exponente; $i++) {
        $resultado=$resultado *$base;
    }
    echo "<p>$resultado</p>";
?>
