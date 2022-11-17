<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Actividad4</title>
</head>

<body>
    <?php
    // Crea un array de dos dimensiones que contenga el nombre de cada persona, su apellido y su edad, 
    // que será un número aleatorio entre 0 y 100. Muestra los datos en una tabla que además contenga 
    // una columna que indique si la persona es menor de edad, mayor de edad, o está jubilada (+65 años). 
    //  Utiliza funciones y la estructura match.
    //$edad = range(0, 9);
    //foreach ($array as &$v) {
    //$v = rand(0, 100);
    //}

    //FUNCIONES
    function edadtipoMatch(int $edad)
    {
        $edadtipo = match (true) {
            $edad < 18 => "Menor de edad",
            $edad >= 18 and $edad < 65 => "Mayor de edad",
            $edad >= 65 and $edad < 100 => "Juvilad@",
            default => "Muerto"
        };
        return $edadtipo;
    }


    ?>

    <?php
    $personas = [
        ["cristiano ronaldo", "Dos Santos", rand(0, 100)],
        ["Lionel Andrés", "Messi Cuccittini", 86],
        ["Francisco", "Franco", rand(0, 100)],
        ["Hasbulla", "Magomedov", rand(0, 100)]
    ];
    $Nombre = array_column($personas, 0);
    $Apellidos = array_column($personas, 1);
    $edad = 

    array_multisort($Nombre, $Apellidos,  $personas);


    ?>

    <div class="row">
        <div class="col-7">
            <table class="table">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Tipo Persona</th>
                </tr>
                <?php


                foreach ($personas as $personas) {
                    list($Nombre, $Apellidos, $edad) = $personas;
                ?>

                    <tr>
                        <td><?php echo $Nombre ?></td>
                        <td><?php echo $Apellidos ?></td>
                        <td><?php echo $edad ?></td>
                        <td><?php echo edadtipoMatch($edad) ?></td>

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