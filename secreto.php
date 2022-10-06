<?php

$secreto = mt_rand(1,50);

for($var=1; $var < 51;$var++){
    if($var == $secreto){ 
        echo "Este es tu numero";
        echo "\n";
    }else if($var != $secreto){
        echo $var; 
        echo "\n";
    } 

}
?> 