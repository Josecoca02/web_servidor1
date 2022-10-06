
<h1>Ejercicio2</h1>

<?php
    echo "[";
    for ($i = 3; $i <= 30; $i+=3) {
        if ($i < 30) {
            echo "$i,"
         else{
            echo "$i";
        }
    }
    echo "]";
?>
