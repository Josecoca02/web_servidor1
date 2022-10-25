<?php
   $numeroCantidad =$_POST["numeroCantidad"];
   $numeroInicio=$_POST["numeroInicio"];
   $contador=0;

   // 
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
   echo "<p>Hay $contador número primos : </p>";
?>