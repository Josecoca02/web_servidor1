<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>actividad2</title>
</head>

<body>
    <?php
    $cesta = [
        ["Pringels",  3, 3],
        ["Vaso",  2, 5],
        ["Teclado Hyper x",  90, 1],
        ["Perfume  Hugo Boss", 45, 2]
    ];
    $producto = array_column($cesta, 0);
    $precio = array_column($cesta, 1);
    $cantidad = array_column($cesta, 2);
    $newCesta = [];
for($i = 0; $i < count($cesta); $i++){
   array_push($newCesta, [$cesta[$i][0], $cesta[$i][1], $cesta[$i][2], $cesta[$i][1]*$cesta[$i][2]]);
}
    
    $totalprecio = array_sum($precio);
    $totalproducto =  count($producto);
    array_multisort($producto, SORT_ASC,  $precio, $cesta);
    ?>
    <div class="row">
        <div class="col-5">
            <table class="table">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>

                <?php
                foreach ($cesta as $cesta) {
                    list($producto, $precio, $cantidad) = $cesta;
                ?>
                    <tr>
                        <td><?php echo $producto ?></td>
                        <td><?php echo " $precio € " ?></td>
                        <th><?php echo  $cantidad ?></th>
                        <th><?php echo $newCesta ?></th>
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