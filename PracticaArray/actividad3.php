<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $numeros = [];

     for ($i=0; $i<=50; $i++){
         $numeros[] = $i;
     }
    ?>

<ul>
    
        <?php
        //3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36, 39, 42, 45, 48 NUMEROS DIVISIBLES ENTRE 3   DE 0 50 V
        for ($i = 0; $i < count($numeros);$i++) {
        ?>
            <li><?php echo $numeros[$i] ?></li>
        <?php
        }
        ?>
    </ul>
    
</body>
</html>