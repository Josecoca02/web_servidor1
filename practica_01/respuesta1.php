<?php
   $numeroCantidad =$_POST["numeroCantidad"];
   $numeroInicio=$_POST["numeroInicio"];
   $contador=0;

   if($numeroInicio ==1) {
      echo "1 si es un numero primo <br>";
      echo "2 no es un numero primo <br>";
      $contador +=1;
   }

   if($numeroInicio ==2){
      echo"2 no es un numero primo <br>";
   }
   for($i =$numeroInicio; $i <= $numeroCantidad; $i++){
      for($a= 2; $a<$i; $a++) {
         if($i%$a ==0){
            echo "";
            break;
         }
         if($a ==$i-1) {
            echo "$i si es numero primo <br>";
            $contador += 1;
         }
      }
   }
   echo "<br>Hay $contador número primos : ";
?>