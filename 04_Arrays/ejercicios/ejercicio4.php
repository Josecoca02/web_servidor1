<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>
<body>
    <h1>ACTIVIDAD 4 </h1>
    <?php
    $series = [
            ["Big Bang Theory", "Netflix", 12],
            ["Vikings" , "Hbo", 6],
            ["Casa de papel", "Netflix", 5],
            ["La que se avecina", " Amazon Prime", 13],
            ["Aida", "Amazon Prime", 8 ],
    ];
    ?>
    //TABLA 1 DE FORMA 1
    <table>
            <tr>
                <th>TITULO</th>
                <th>PLATAFORMA</th>
                <th>TEMPORADAS</th>
            </tr>
        <?php
            foreach ($series as $serie) {
            list($titulo, $plataforma, $temporada) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporada ?></td>
            </tr>
        <?php 
         } 
        ?>
    
        </table>
        <br><br>
        //TABLA 2 DE LA 2 FORMA TEMPORADAS DE MENOR A MAYOR
        <table>
            <tr>
                <th>TITULO</th>
                <th>PLATAFORMA</th>
                <th>TEMPORADAS</th>
            </tr>
        <?php
     

            foreach ($series as $serie) {
            list($titulo, $plataforma, $temporada) = $serie;

            $temporada = array_column($series, 2);
            array_multisort($temporada, SORT_DESC, $series);
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporada ?></td>
            </tr>
            
        <?php 
         } 
        ?>
        </table>
        <br><br>
         // TABLA DE LA 3 FORMA: 
        <table>
            <tr>
                <th>TITULO</th>
                <th>PLATAFORMA</th>
                <th>TEMPORADAS</th>
            </tr>
        <?php
            foreach ($series as $serie) {
            list($titulo, $plataforma, $temporada) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporada ?></td>
            </tr>
        <?php 
         } 
        ?>
        </table>
    
    
</body>
</html>