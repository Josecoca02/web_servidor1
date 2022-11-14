<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Actividad 1</title>
</head>

<body>

    <!-- Crea un array que almacene nombres de productos y sus respectivos precios.
 Muestra en una tabla los productos con sus precios, ordenados alfabéticamente por el nombre del producto. 
 Muestra también el precio total de todos los productos y cuántos productos hay en el array. -->

    <?php



    $cesta = [
        ["platanos",  3],
        ["vaso",  2],
        ["teclado Hyper x",  90],
        ["perfume", 45]
    ];
    $producto = array_column($cesta, 0);
    $precio = array_column($cesta, 1);
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
                    <th>Total Precio</th>
                    <th>Total Productos</th>
                </tr>

                <?php
                foreach ($cesta as $cesta) {
                    list($producto, $precio) = $cesta;
                ?>
                    <tr>
                        <td><?php echo $producto ?></td>
                        <td><?php echo " $precio $" ?></td>
                        <th><?php echo  $totalprecio ?></th>
                        <th><?php echo $totalproducto ?></th>


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