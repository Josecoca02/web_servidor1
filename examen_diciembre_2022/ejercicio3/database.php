<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'admin';
    $base_datos = 'db_juegos_de_mesa';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");
?>