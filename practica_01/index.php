<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica01</title>
    <link rel="stylesheet" type="text/css" href="sytles.css" />
</head>

<body>
    <h1> PRACTICA01 </h1>
    <div>
        <h2>Ejercicio 1</h2>
        <p>Un número primo es aquel que sólo es divisible entre sí mismo y 1. Crea un formulario que reciba dos números “a” y “b”. El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”. </p>
        <form action="" method="post">
            <label>NumeroCantidad </label><br>
            <input type="text" name="numeroCantidad"><br><br>
            <label>NumeroInicio </label><br>
            <input type="text" name="numeroInicio"><br><br>
            <input type="submit" value="Enviar">
            <input type="hidden" name="f" value="ej1">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej1") {
                $numeroCantidad = $_POST["numeroCantidad"];
                $numeroInicio = $_POST["numeroInicio"];
                $contador = 0;
            }
        }
            if ($numeroInicio == 1) {
                echo "1 si es un numero primo <br>";
                echo "2 no es un numero primo <br>";
                $contador += 1;
            }

            if ($numeroInicio == 2) {
                echo "2 no es un numero primo <br>";
            }
            for ($i = $numeroInicio; $i <= $numeroCantidad; $i++) {
                for ($a = 2; $a < $i; $a++) {
                    if ($i % $a == 0) {
                        echo "";
                        break;
                    }
                    if ($a == $i - 1) {
                        echo "$i si es numero primo <br>";
                        $contador += 1;
                    }
                }
            }
            echo "<br>Hay $contador número primos : ";
        
        ?>
    </div>
    <div>
        <h2>Ejercicio 2</h2>
        <p>Crea un formulario que compruebe si un DNI es válido. Un DNI es válido si:
            Está formado por 8 dígitos seguidos de una letra (mayúscula o minúscula)
            La letra es válida (debes de investigar cómo averiguar si la letra es válida)
            No usar expresiones regulares. </p>
        <h4>INTRODUCE EL DNI </h4>
        <form action="" method="post">
            <label>DNI</label><br>
            <input type="text" name="dni"><br><br>
            <label>LETRA</label><br>
            <select name="LetraDni" id="LetraDni">
						<option>T</option>
						<option>R</option>
						<option>W</option>
						<option>A</option>
						<option>G</option>
						<option>M</option>
						<option>Y</option>
						<option>F</option>
						<option>P</option>
						<option>D</option>
						<option>X</option>
						<option>B</option>
						<option>N</option>
						<option>J</option>
						<option>Z</option>
						<option>S</option>
						<option>Q</option>
						<option>V</option>
						<option>H</option>
						<option>L</option>
						<option>C</option>
						<option>K</option>
						<option>E</option>
					</select>
            <input type="hidden" name="f" value="ej2">
            <input type="submit" value="Enviar">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_POST["f"] == "ej2") {
                $dni = $_POST["dni"];
                $letrdni = $_POST["LetraDni"];
                $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
                $ValidarLetra = substr($letras, $dni % strlen($letras), 1);

                if ($letrdni == $ValidarLetra) {
                    echo "El DNI $dni$letrdni  ES CORRECTO ";
                } else {
                    echo "EL DNI $dni$letrdni ES INCORRECTO ";
                }
            }
        }
        ?>

    </div>

    <div>
        <h2>Ejercicio 3</h2>
        <p>Genera de manera dinámica las tablas de multiplicar del 1 al 10.
            El resultado debe ser parecido al siguiente y estar estructurado mediante tablas HTML. </p>
        </p>

        <h2>TABLAS DE MULTIPLICAR</h2>

        <?php

        $nu1;
        $nu2;
        echo "<table ";
        echo "<tr>";
        for ($tabla = 1; $tabla <= 10; $tabla++) {
            echo  "<td> Tabla de multiplicar de:($tabla ) </td>";
        }
        echo "</tr>";
        echo "<tr>";
        for ($nu2 = 1; $nu2 <= 10; $nu2++) {
            for ($nu1 = 1; $nu1 <= 10; $nu1++) {
                echo "<td>$nu1 X $nu2 =";
                echo ($nu1 * $nu2);
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";


        ?>

    </div>
</body>

</html>