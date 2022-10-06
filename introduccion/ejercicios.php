<h1>Ejercicios</h1>
<ul>
<?php
    echo "<p> Esto funciona </p>" ;
        /*
            VAMOS A GENERAR 10 NUMEROS ALEATORIOS MOSTRAR DICHOS NUMEROS INDICANDO SI SON PARES O IMPARES 
            MOSTRARLOS EN UNA LISTA
        */
    for ($i = 1; $i<=10; $i++):
        $numero_aleatorio = rand(1,10);
        if( $numero_aleatorio %2 ==0 ) :
            echo "<li> $numero_aleatorio es par  </li>";
        else:
            echo "<li> $numero_aleatorio es impar </li>";
        endif;
        endfor;
        
?>
</ul>