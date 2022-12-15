<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>TABLA ORDENADA POR ORDEN DE INSERCCION</h1>
    <?php
    //Array creada que tendra juegos de mesa TITULO, N DE JUGADORES Y MARCA
        $juegosmesa = [
            ["El cluedo", 3,8, "Hasbro Gaming" ],
            ["Pictureka", 5,10, "Bandai" ],
            ["Monopoly", 7,6, "Hasbro Gaming"],
            ["Busca Huesos", 5,6, "Hasbro Gaming"]

        ];
        //nuevo juego mesa
        $newjuegomesa=["El doctor", 8,5, "Arrakis Games"];
        array_push($juegosmesa, $newjuegomesa);
        //edit de arrar
        $juegosmesa[2] =["Monopoly", 10,6, "Hasbro Gaming"];
        //ELIMINAR UN ELEMENTO DEL ARRAY
        unset($juegosmesa[0]);
    ?>

<div class="row">
                <div class="col-7">
                    <table class="table">
                    <tr>
                            <th>TITULO</th>
                            <th>EDAD RECOMENDADA</th>
                            <th>Nº JUGADORES</th>
                            <th>Marca</th>
                    </tr>
                <?php
                foreach ($juegosmesa as $mesajuego) {
                    list($titulo, $edadreco, $n_jugadores, $marca) = $mesajuego;
                ?>
                    <tr>
                        <td><?php echo $titulo ?></td>
                        <td><?php echo $edadreco ?></td>
                        <td><?php echo $n_jugadores ?></td>
                        <td><?php echo $marca ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div><br><br>

    <H1>TABLA ORDENADA POR MARCA</H1>
    <div class="row">
                <div class="col-7">
                    <table class="table">
                    <tr>
                            <th>Titulo</th>
                            <th>EDAD RECOMENDADA</th>
                            <th>N1 JUGADORES</th>
                            <th>MARCA</th>
                    </tr>
                <?php
                $marca =array_column($juegosmesa, 3);
                $titulo =array_column($juegosmesa,0);
                array_multisort($marca, SORT_ASC, $titulo, SORT_ASC,$juegosmesa);
              
                foreach ($juegosmesa as $mesajuego) {
                    list($titulo, $edadreco, $n_jugadores, $marca) = $mesajuego;
                ?>
                    <tr>
                        <td><?php echo $titulo ?></td>
                        <td><?php echo $edadreco ?></td>
                        <td><?php echo $n_jugadores ?></td>
                        <td><?php echo $marca ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

</body>
</html>