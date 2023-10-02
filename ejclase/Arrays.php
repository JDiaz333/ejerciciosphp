<?php
    echo "<h1>Arrays</h1>";
    $array = array(6,"perro",9.6,true);

    var_dump($array);
    echo "<br>";
    print_r($array);

    echo "<br>Num elem: " . count($array);

    echo "<h3>Acceder a elementos</h3>";

    for($i = 0; $i < count($array); $i++){
        echo "<br>Elemento $i vale: " . $array[$i];
    }
    echo "<br>";
    foreach($array as $elemento){
        echo "<br>Elemento vale: " . $elemento;
    }

    //Añadir elemento al final
    $array[] =  "otro";

    $array[22] = "último";
    echo "<br>";
    print_r($array);

    echo "<br>Num elem: " . count($array);

    echo "<br>El sexto elemento es " . $array[22];

    echo "<br>";
    foreach($array as $elemento){
        echo "<br>Elemento vale: " . $elemento;
    }

    $array = array_values($array);
    echo"<br>";
    print_r($array);

    echo "<br>¿Está el 10? " . in_array(10,$array);