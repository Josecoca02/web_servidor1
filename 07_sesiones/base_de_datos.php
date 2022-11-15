<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'admin';
    $base_de_datos = 'db_usuarios';

    $conexion = new MySQLi($servidor, $usuario, 
                                $contrasena, $base_de_datos) 
                                or die("Error en la conexión");
?>
