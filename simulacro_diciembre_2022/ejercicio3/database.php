<?php 
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'admin';
    $base_datos = 'db_personajes';

    $conexion = new Mysqli($servidor, $usuario, $contrasena, $base_datos) 
        or die("Error en la conexión");
?>