<h1>Ejercicio5</h1>
<?php
    $base = $_GET["base"];
    $exponente =$_GET["exponente"];
    $resultado;
    //$resultado =1;

    if ($exponente < 0) {
        echo "<p> El exponente debe ser positivio </p>"
    } else if ($exponente ==0)  {
        echo "<p>$resultado</p>";
    }else{

    
    //for($i =1; $i<=$exponente; $i++);  
    //$resultado =1;

    for ($i =1 ; $i<=$exponente; $i++) {
        $resultado=$resultado *$base;
    }
    echo "<p>$resultado</p>";
    }
?>
