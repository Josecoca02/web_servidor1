<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3
    </title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

h2{
    
    text-align: center;
}

div{
    width: 100%;
    height: calc(100vh - 57px);
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
    gap: 50px;
}

#tabla{
    padding: 20px;
    width: 200px;
    height: 220px;
    color: #fff;
    font-size: 1rem;
    background-color: rgba(160, 0, 200, 0.739);
}

    </style>
</head>

<body>
    <h2>TABLAS DE MULTIPLICAR</h2>
    <div class="tabla">
        <?php
    $nu1;
    $nu2;
    echo "<table ";
    echo "<tr>";
    for ($tabla = 1; $tabla <= 10; $tabla++) {
        echo "<td>Tabla de multiplicar de $tabla </td>";
    }
    echo "</tr>";
    echo "<tr>";
    for ($nu2 = 1; $nu2 <= 10; $nu2++) {
        for ($nu1 = 1; $nu1 <= 10; $nu1++) {
            echo "<td>$nu1 X $nu2 ="; 
            echo ($nu1 * $nu2);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>"; 
?>

    </div>
    


   
    
</body>

</html>