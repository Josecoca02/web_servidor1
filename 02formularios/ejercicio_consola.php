<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_Consolas</title>
   
</head>
<body>
    <h1>vidiojuego</h1>
<form action="ejercicio_consola.php" method="post">
<label> Nombre:</label><br>
    <input type ="text" name="nombre"><br><br>
  <label> Consola</label><br>
  <select name="consolas">
    <option value="ps4">Plastation 4 </option>
    <option value="ps5">Plastation 5 </option>
    <option value="xbox">X box </option>
    <option value="switch"> Nintendo Switch</option>
  </select><br><br>
  <label>edicion especial</label><br>
  <input type ="checkbox" name="especial" value="si"><br>
    <input type="submit" value ="Enviar">
</form>

    <?php
        if ($_SERVER ["REQUEST_METHOD"] == "POST ") {
            $nombre = $_POST["nombre"];
            $consola = $_POST["consola"];
            $especial = "";
            if (isset($_POST["especial"])) {
                $especial = $_POST["especial"];
            }
        
            echo "<p>$nombre</P>";
            echo "<p>$consola</p>";
            echo "<p>$especial</p>";
            $precio = 0;
            //COMPROBAMOS LA CONSOLA
            if($consola =="ps4") {
                $precio = 60;
            }else if  ($consola == "ps5") {
                $precio = 70;
            }elseif ($consola == "xbox"){
                $precio = 40;
            }elseif ($consola = "switch") {
                $precio = 30;
            }
            //COMPROBAMOS SI ES EDICION ESPECIAL
            if($especial =="si") {
                $precio *=1.25;
            }
            echo "<h3> EL VIDEOJUEGO $nombre VALE $precio </h3>";
        }
    ?>

</body>
</html>