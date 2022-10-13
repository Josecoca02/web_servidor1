<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario2</title>
    <link rel="stylesheet" href="sytles.css"> 
</head>
<body>
    <div>
    <form action="formulario2_respuesta.php" method="get">
    <label>Numero </label><br>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Enviar">

</form>
 </div>
 <?php 
        require 'footer.php';
    ?>
</body>
</html>
