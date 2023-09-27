<?php
    define("CONS",169);
    $divisores=0;
    
    echo "Divisores de " . CONS . "<br>";
    for($i=1; $i < CONS; $i++){
        if (CONS%$i == 0){
            echo $i . "<br>";
            $divisores++;
        }
    }
     
    if($divisores ==0){
        echo "El número es primo.";
    }