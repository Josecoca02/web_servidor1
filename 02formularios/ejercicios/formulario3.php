<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario3</title>
    <link rel="stylesheet" href="sytless3.css"> 
</head>
<body>
    
    <form action="formulario3_respuesta.php" method="get">
    <label>Nombre </label><br>
    <input type="text" name="nombre"><br><br>
    <label>Edad </label><br>
    <input type="text" name="edad"><br><br>
    <input type="submit" value="Enviar">
</form>
    <?php 
        require 'footer.php';
    ?>
</body>
</html>