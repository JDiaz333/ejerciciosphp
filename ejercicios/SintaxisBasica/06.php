<?php
    echo "Primeros 10 números de la sucesión de Fibonacci: <br>";

    $term = 0;
    $term2 = 1;

    echo $term . "<br>" . $term2 . "<br>";
    for($i=0;$i<10;$i++){
        $suma = $term + $term2;
        echo $suma . "<br>";
        $term = $term2;
        $term2 = $suma;
    }