<?php
    $numero = $_POST["numero"];
    echo"<table>";
    echo "<tr><th>Tabla del $numero </th></tr>";
    for($i=1; $i <=12; $i++){
        echo"<tr>";
        echo "<td>$numero x $i</td>";
        echo "<td>" . $numero * $i . "</td>";
        echo "</tr>";
    }
    echo"</table>";

?>