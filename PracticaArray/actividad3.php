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
    <h1> Numero de 1 a 50 menos los divisibles entre 3</h1>
    <?php
    $numeros = [];
    for ($i = 0; $i <= 50; $i++) {
        $numeros[] = $i;
    }
    ?>
    <ul>
    <?php
    foreach ($numeros as $divisible3 => $numerico) {
        if ($numerico%3==0){
                unset($numeros[$numerico]);
        }
    }
        foreach ($numeros as $divisible3 => $numerico) {
            echo "<li>" . $numerico . "</li>";
        }
        
    ?>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>