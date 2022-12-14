<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php require 'validacion.php' ?>

    <form action="" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <span class="error">
                 <?php if(isset($err_nombre)) echo $err_nombre ?>
        <br><br>
        <label>Edad: </label>
        <input type="text" name="edad">
        <span class="error">
                 <?php if(isset($err_edad)) echo $err_edad ?>
            </span>
        <br><br>
        <label>Género: </label>
        <select name="genero">
            <option value="" selected disabled hidden>-- Selecciona el género --</option>
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
            <option value="otro">Otro</option>
        </select>
        <span class="error">
                * <?php if (isset($err_genero)) echo $err_genero ?>
            </span>
        <br><br>
        <label>Videojuego: </label>
        <input type="text" name="videojuego">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>