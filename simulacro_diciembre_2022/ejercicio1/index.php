<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <H1>TABLA ORDENADA POR ORDEN DE INSERCCIÓN</H1>
    <?php
    
        //CREACION DE ARRAY
        $Personajejuego = [
            ["Mario bross", 54, "Masculinos", "Mario bross squads game"],
            ["Spiderman" , 21, "Masculino", "Spiderman 3" ],
            ["Sonic", 3, "Masculino", "Sonnic Morphs" ]
        ];
            //nuevo personaje
        $newpersonaje=["Luigi", 4, "Masculino", "Luigi supreme"];
        array_push($Personajejuego, $newpersonaje);

            //editar personaje ya existente

            //eliminar personaje
            unset($Personajejuego[0]);
    ?>

    
            <div class="row">
                <div class="col-7">
                    <table class="table">
                    <tr>
                            <th>Nombre</th>
                            <th>EDAD</th>
                            <th>Genero</th>
                            <th>TITULO VIDEOJUEGO</th>
                    </tr>
                <?php
                foreach ($Personajejuego as $personajejuego) {
                    list($nombre, $edad, $genero, $titulo_videojuego) = $personajejuego;
                ?>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td><?php echo $edad ?></td>
                        <td><?php echo $genero ?></td>
                        <td><?php echo $titulo_videojuego ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div><br><br>

    <H1>TABLA ORDENADA POR TITULO</H1>
    <div class="row">
                <div class="col-7">
                    <table class="table">
                    <tr>
                            <th>Nombre</th>
                            <th>EDAD</th>
                            <th>Genero</th>
                            <th>TITULO VIDEOJUEGO</th>
                    </tr>
                <?php
                $titulo_videojuego =array_column($Personajejuego, 3);
                array_multisort($titulo_videojuego, SORT_ASC,$Personajejuego);
                foreach ($Personajejuego as $personajejuego) {
                    list($nombre, $edad, $genero, $titulo_videojuego) = $personajejuego;
                ?>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td><?php echo $edad ?></td>
                        <td><?php echo $genero ?></td>
                        <td><?php echo $titulo_videojuego ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
</body>
</html>