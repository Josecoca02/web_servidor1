<?php
    session_start();
    session_destroy();
    header("location: http://localhost/06_BaseDatos/tienda_ropa/public/iniciar_sesion.php");
?>