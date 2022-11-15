<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Actividad3</title>
</head>

<body>
    <?php
    /* 

            $numerospares = [];

            for ($i=0; $i<=50; $i +=2){
                $numerospares[] = $i;
            }




            ?>
            <ul>
                <?php
                for ($i = 0; $i < count($numerospares);$i++) {
                ?>
                    <li><?php echo $numerospares[$i] ?></li>
                <?php
                }
                ?>
            </ul> */


    $numeros = [];

    for ($i = 0; $i <= 50; $i++) {
        $numeros[] = $i;
    }
    ?>
    <ul>
        <?php
        for ($i = 0; $i < count($numeros); $i++) {
           
        ?>
            <li><?php echo $numeros [$i]?></li>
        <?php
        }
        ?>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>