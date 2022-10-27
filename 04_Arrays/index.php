<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <?php

//     $videojuego = array(
//         "juego1" => "Cyberpunk 2077",
//         "juego2" => "Minecraft",
//         "juego3" => "My little Ponny"
//     );
//     print_r($videojuego);
//     echo "<br><br>";

//     // OTRA FORMA DE  ARRAY 
//     $consola = [
//         "consola1" => "PS4",
//         "consola2" => "PS5",
//         "consola3" => "Nintendo Switch"
//     ];
//     print_r($consola);
//     echo "<br><br>";
// -----------------------------------------------------------------------------------

    //CREA ARRAY QUE TENGA COMO KEYS LOS DNI DE DISTINTAS 
//PERSONAS Y COMO VALORES SUS NOMBRES E IMPRIMIRLOS.

    //  Array Personas
    $personas = [
        "23242627F" => "Albertiño",
        "95542627T" => "Armando",
        "87234455G" => "Pepe"
    ];
    
    $personas["12345678D"] = "Rodolfo";

    $personas["87234455G"] = "Ruperto";

    unset($personas["23242627F"]);

    $personas = array_values($personas);

    print_r($personas);

    echo "<br><br>";

    echo "Hay " . count($personas) . " personas";

    

    echo "<table>";
    echo "<tr>";
    echo "<th> DNI  </th>";
    echo "<th>NOMBRE </th>";
    echo "</tr>";

    foreach($personas as $dni => $nombre) {
        echo "<tr>";
        echo "<td>" .$dni . "</td>";
        echo "<td>" . $nombre . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br>";

   
    
    // SERIES 
     
    $series = [
        'El juego del calamar',
        'La casa de papel',
        'Alice in borderland',
        'The Witcher'
    ];    
    //  Inserta elementos al final del array
    array_push($series, "Cuéntame", "Dark");

    $series[] = "Big Bang Theory";

    $series[10] = "La que se avecina";

    array_push($series, "Haikyuu");

    $series[10] = "Aquí no hay quien viva";

    unset($series[10]);

    $series = array_values($series);
    echo "<br>";

        // FOREACH  CON INDICE 
        foreach ($series as$indice => $serie) {
            echo  $indice ."=>" .$serie . "<br>";
        } 
    ?>
     <!-- Bucle for para las series -->
        <h3>LISTAS DE SERIES</h3>
     <ul>
        <?php
        asort($series);
        for ($i = 0; $i < count($series); $i++) {
        ?>
            <li><?php echo $series[$i] ?></li>
        <?php
        }
        ?>
    </ul>

    <!-- Bucle while para las series -->
    <ol>
        <?php 
        $i = 0;
        while ($i < count($series)) {
        ?>
            <li><?php echo $series[$i] ?></li>
        <?php
            $i++;
        }
        ?>
    </ol>
    <!-- TABLA FOREACH PARA LAS PERSONAS-->
    <table>
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
        </tr>
        <?php
        foreach ($personas as $dni => $nombre) {
            ?>
            <tr>
                <td><?php echo $dni ?></td>
                <td><?php echo $nombre ?></td>
        </tr>
        <?php
        }
        ?>
        </table>


        <?php
        $frutas_1= ["Melocotón" => 0.5, "Sandia" => 1,"kiwi"=> 2];
        $frutas_2 = ["Sandia" =>1,"Melocotón"=> 0.5,"Kiwi" =>2];

        // if($frutas_1 == $frutas_2) {
        //     echo "<p>LOS ARRAYS TIENEN EL MISMO ELEMENTO</p>";
        // } else{
        //     echo "<p>LOS ARRAYS NO TIENEN LOS MISMOS ELEMENTOS </p>";
        
        // }

        // if($frutas_1 === $frutas_2) {
        //     echo "<p> LAS FRUTAS SON LAS MISMAS Y ESTAN ORDENADAS IGUAL </p>";
        // } else {
        //     echo "<p> LAS FRUTAS NO SON LAS MISMAS O NO ESTAN ORDENADAS IGUAL </p>";    
        // }

        
        ?>
</body>
</html>