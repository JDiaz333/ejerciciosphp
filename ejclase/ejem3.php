<?php

    // mostrar por pantalla: echo, print, print_r, var_dump

    $num = 16;
    $num2 = "16";
    $decimal = 9.6;
    $resultado = $num2 / $decimal;
    $resultado2 = (integer)($num2 / $decimal)   ;
    $cadena = "hola \"Pedro\"";
    echo $cadena;
    echo "<br>" .   gettype($cadena);

    // Operadores aritméticos y lógicos
    // Aritméticos: +, -, *, /, %, **
    // Lógicos: &&, ||
    // Operaciones de comparación: ==, != or <>, >, <, >=, <=

    // if, else, elseif, switch case, for
    // == mismo contenido, === mismo contenido y tipo de dato
    // <=> spaceship 2<=>2 -> 0 2<=>3 -> -1 3<=>2 -> 1

    if($num == $num2){
        echo "<br> Son iguales";
    }else{
        echo "<br> Son distintos";
    }

    if($num === $num2){
        echo "<br> Son iguales";
    }else{
        echo "<br> Son distintos";
    }

    echo "<br>" . $num + $num2;

    if($num%2 == 0){
        echo "<br>  Es par";  
    }

    echo "<br>" . $resultado;
    echo "<br>" . $resultado2;

    // constante
    define("PI",3.14);
    echo "<br> PI vale:" . PI;

    const NUMAUREO = 1.15;
    echo "<br> NUMAUREO vale:" . NUMAUREO;

    // for

    echo "<br><h3>BUCLE FOR</h3>";
    for($i=0;$i<10;$i++){
        echo "i vale:" . $i . "<br>"; 
    }