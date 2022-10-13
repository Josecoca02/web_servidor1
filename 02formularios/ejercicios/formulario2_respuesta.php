<ul>

<?php
    $n= $_POST["numero"];
    for($i = 1; $i <= $n; $i++) {
        echo "<li>$i</li>";
    }
?>
</ul>