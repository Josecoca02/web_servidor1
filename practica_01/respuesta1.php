<?php
   $numeroa =$_POST["numeroa"];

 /*       for($i=2 ; $i<= $numeroa; $i++){
            if( $numeroa%i==0){
                $primo=false;
            }
           
        }
        if($primo==true){
            echo "($numeroa )";
            $acomulados++;
        }
        $numeroa+=1;
        $primo=true;;
         */
        if(esPrimo($numeroa)){
            echo 'Es primo';
        }else{
            echo 'No es primo';
        }
        
        function esPrimo($numeroa)
        {
            if(!is_numeric($numeroa))
                //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
                return false;
        for ($i = 2; $i < $numeroa; $i++) {
        
            if (($numeroa % $i) == 0) {
                
                // No es primo 🙁
                return false;
    
            }
    
        }
?>