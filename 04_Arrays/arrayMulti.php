<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>ARRAY MULTIDIMENSIONAL</title>
</head>
<body>
    <?php
        //COMO CREAR ARRAY MULTIDIMENSIONAL
        $juegos = [
            ["Call of duty 2022", "PS5", 70],
            ["Fornite" , "Ps4", 0],
            ["Wwe 2k23", "Ps5", 70],
            ["Mario Legened", "Nintendo 64", 40],
            ["World Of Wartcraft", "Pc", 20 ],
            ["Pacman", "Atari", 60],
        ];

        //AGREGAR JUEGO EN EL ARRAY

            $nuevojuego= ["Fruit Ninja", "Ps4",0];
            array_push($juegos, $nuevojuego);

         //Para Borrar una cosa del array unset 
         unset($juegos[2]);
        
         // EXTRAEMOS LA COLUMNA DELA ARRAY 
         // CON ARRAY _COLUMNA COGEMOS LA COLUMNA Y LOS VALORS DE ESA COLUMNA LOS ORDENAMOS COM NOS VEGA ENGANA
         $nombre =array_column($juegos, 0);
         $consola = array_column($juegos, 1);
         array_multisort($consola, SORT_ASC,  $nombre,SORT_DESC,$juegos);


            // RECORRER LA ARRAY  CON FOREACH

        // foreach ($juegos as $juego) {
        //     list($nombre, $consola, $precio) = $juego;
        //     echo "Nombre: $nombre" . "Consola: $consola" . "Precio: $precio". "<br> ";
        
        // }
        ?>
        // MOSTRAR EL ARRAY EN FORMA DE TABLA
         <table>
            <tr>
                <th>TITULO</th>
                <th>CONSOLA</th>
                <th>PRECIO</th>
            </tr>
        <?php
            foreach ($juegos as $juego) {
            list($nombre, $consola, $precio) = $juego;
        ?>
            <tr>
                <td><?php echo $nombre ?></td>
                <td><?php echo $consola ?></td>
                <td><?php echo $precio ?></td>
            </tr>
        <?php 
         } 
        ?>
        </table>
    
            
    
</body>
</html>