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
    $videojuego = array(
        "juego1" => "Cyberpunk 2077",
        "juego2" => "Minecraft",
        "juego3" => "My little Ponny"
    );
    print_r($videojuego);
    echo "<br><br>";
    // OTRA FORMAD ARRAY 
    $consola = [
        "consola1" => "PS4",
        "consola2" => "PS5",
        "consola3" => "Nintendo Switch"
    ];
    print_r($consola);
    echo "<br><br>";

    //CREA ARRAY QUE TENGA COMO KEYS LOS DNI DE DISTINTAS 
//PERSONAS Y COMO VALORES SUS NOMBRES E IMPRIMIRLOS.

    $dniPersonas= [
        "79289108N" => "Jose COCA",
        "79289103M" => "PEPE MARTINEZ",
        "72334242R" => "Ivan Gutierrez"
    ];
    print_r($dniPersonas);
    echo "<br><br";

    $series =[
        1 => 'El jeugo del calamar',
        '1' => 'La casa de papel',
        1.3 => 'Alice in borderland',
        true => 'The Witcher'
    ];
    print_r($series);
    echo "<br><br>";
    echo $series[1];

    ?>
</body>
</html>