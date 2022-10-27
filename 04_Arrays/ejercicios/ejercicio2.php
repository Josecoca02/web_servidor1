<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styless.css">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
     $numerosaleatorios =[];


     for ($i=0; $i<=10; $i++){
        $numerosaleatorios[] =rand(0,100);
     }
    ?>
    <h2> NUMEROS ORDENADOS DE MAYOR A MENOR </h2>
    <ul>
        <?php
        rsort($numerosaleatorios);
        for ($i = 0; $i < count($numerosaleatorios); $i++){
            echo "<li>" . $numerosaleatorios[$i] . "</li>";
        }
        ?>
    </ul>
    
    <h2>NUMEROS ORDENADOS DE MENOR A MAYOR</h2>

    <ul>
        <?php
        sort($numerosaleatorios);
        for ($i =0; $i < count($numerosaleatorios); $i++) {
            echo "<li>" . $numerosaleatorios[$i] . "</li>";
        }
        ?>
    </ul>
<?php
    // for ($i=0; $i<$max_num; $i++) {
    //     $numerosaleatorios = rand(1,100);
    //     array_push($numerosaleatorios, 
    // }

?>
    
</body>
</html>