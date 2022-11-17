<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=_, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Actividad5</title>
</head>
<body>
<!-- Crea un array que contenga el DNI y el nombre de cada persona. Muestra esa información
 en una tabla en la que además indiques si el DNI introducido es correcto. Comprueba si el DNI 
 es correcto o no en una función.  -->

    <?php
    function validardniMatch($dni) {
    
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
            echo 'valido';
        }else{
            echo 'no valido';
        }
    }
       
    ?>
    <?php
 $dnies = [
        ["79289108N", "Miguel "],
        ["89198453N", "Sabiola" ],
        ["79394043K", "Vinicius" ]
      
    ];
    ?>

<div class="row">
        <div class="col-7">
            <table class="table">
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>DNI VALIDACION</th>
        </tr>
        <?php
        foreach ($dnies as $dnies) {
            list($dni, $nombre) = $dnies;
        ?>
            <tr>
                <td><?php echo $dni ?></td>
                <td><?php echo $nombre ?></td>
                <td><?php echo validardniMatch($dni);?></td>
                
            </tr>
        <?php
        }
        ?>
    </table>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>