<?php
    $dni = $_POST["dni"];
    $ldni= $_POST["ldni"];
    $letras ="TRWAGMYFPDXBNJZSQVHLCKE";
    $letra = substr($letras,$dni % strlen($letras),1);

    if ($ldni == $letra) {
        echo "El DNI $dni$ldni  ES CORRECTO ";
    }else{
        echo "EL DNI $dni$ldni ES INCORRECTO ";
    }
?>

