<?php
    session_start();
    session_destroy();
    header("location: http://localhost/web_servidor1/06_BaseDatos/tienda_ropa/public/iniciar_sesion.php");
?>