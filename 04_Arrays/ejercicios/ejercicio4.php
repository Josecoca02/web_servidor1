<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>EJERCICIO 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <?php
    $series = [
        ["El Vigilante", "Netflix", 2],
        ["Vikings", "HBO", 6],
        ["Spy x Family", "Netflix", 2],
        ["Andor", "Disney Plus", 1],
        ["Dora la Exploradora", "Disney Plus", 3]
    ];
    ?>
    <div class="row">
         <div class="col-6">
            <h2>Tabla 1</h2>
                <table class="table">
        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporadas ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
</div>

    <br><br>

    <h2>Tabla ordenada por temporadas</h2>

    <table>
        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        $temporadas = array_column($series, 2);
        array_multisort($temporadas, SORT_DESC, $series);
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporadas ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <br><br>

    <h2>Tabla ordenada por plataforma y título</h2>

    <table>
        <tr>
            <th>Título</th>
            <th>Plataforma</th>
            <th>Temporadas</th>
        </tr>
        <?php
        $titulo = array_column($series, 0);
        $plataforma = array_column($series, 1);
        array_multisort($plataforma, SORT_ASC, $titulo, SORT_ASC, $series);
        foreach ($series as $serie) {
            list($titulo, $plataforma, $temporadas) = $serie;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $plataforma ?></td>
                <td><?php echo $temporadas ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>