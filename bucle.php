<?php

for($var=1; $var < 51;$var++){

    if($var % 10 == 3){ //SI VAR MODULO DE 10 DA  3
        echo "queres un mate?";
        echo "\n";
    }else if($var % 10 == 7){
    echo "no se toma con azucar";
    echo "\n";
    } else {
        echo $var; //ESTE ECHO IMPRIME EL NUMERO
        echo "\n"; //salto de linea
    
    }

}



?>