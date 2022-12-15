<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php require 'validacion.php' ?>
    <div class="container">
    <form action="" method="post">
        <label>Título: </label>
        <input type="text" name="titulo">
        <span class="error">
                 <?php if(isset($err_titulo)) echo $err_titulo ?></span>
        <br><br>
        <label>Edad recomendada: </label>
        <select class= "edad_recomendada"name="edad_recomendada">
            <option value="" selected disabled hidden>-- Selecciona la edad recomendada --</option>
            <option value="0">+0</option>
            <option value="3">+3</option>
            <option value="7">+7</option>
            <option value="13">+13</option>
            <option value="18">+18</option>
        </select>
        <span class="error">
                <?php if (isset($err_edad_recomendada)) echo $err_edad_recomendada ?>
            </span>
        <br><br>
        <label>Número de jugadores: </label>
        <input type="text" name="n_jugadores">
        <span class="error">
                 <?php if(isset($err_n_jugadores)) echo $err_n_jugadores ?></span>
        
        <br><br>
        <label>Marca: </label>
        <input type="text" name="marca">
        <span class="error">
                 <?php if(isset($err_marca)) echo $err_marca ?></span>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>