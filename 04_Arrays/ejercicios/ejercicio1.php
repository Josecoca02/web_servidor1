<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
    $numerospares = [];

    for ($i=0; $i<=50; $i +=2){
        $numerospares[] = $i;
    }

    // BAREJEAR LAS CARTAS Y ORDENARLAS
    shuffle($numerospares);
    asort($numerospares);


    ?>
    <ul>
        <?php
        for ($i = 0; $i < count($numerospares);$i++) {
        ?>
            <li><?php echo $numerospares[$i] ?></li>
        <?php
        }
        ?>
    </ul>
    
    
</body>
</html>