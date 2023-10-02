<?php
    echo "<h1>Arrays Asociativos</h1>";

    $capitales = [
        "España" => "Madrid",
        "Reino Unido" => "Londres",
        "Francia" => "París"
    ];

    //Mostrar el array
    foreach($capitales as $clave => $valor){
        echo "La capital de $clave es $valor<br>";
    }
    
    echo "<h3>Arrays multidimensionales (arrays de arrays)</h3>";
    $cestacompra = array(
        "frutas" => array("pera","manzana"),
        "verduras" => array("calabacín")
    );

    print_r($cestacompra);
    echo "<br>";

    foreach($cestacompra as $clave => $valor){
        echo "<br>$clave: ";
        foreach($valor as $kvalor => $vvalor){
            echo " ; La clave es $kvalor y el valor es $vvalor";
        }
    }

    echo "<br>";
    echo "Las frutas son: ";
    foreach($cestacompra["frutas"] as $clave => $valor){
        echo "$valor ";
    }
    
    //recuperar manzana
    $unafruta = $cestacompra["frutas"][1];
    echo "<br>Soy la fruta: $unafruta";

    //cambiar valor
    $cestacompra["frutas"][1] = "apple";
    echo "<br>Soy la fruta: " . $cestacompra["frutas"][1];

    echo "<h3>Funciones de ordenación</h3>";

    //insertar el último elemento
    array_push($cestacompra["frutas"],"kiwi");
    print_r($cestacompra);

    echo "<br>";
    $cestacompra["verduras"][] = "acelga";
    print_r($cestacompra);

    $unkiwi = array_pop($cestacompra["frutas"]); //Acceder al último
    echo "<br>";
    print_r($cestacompra);
    echo "<br>";
    echo "Soy un $unkiwi";

    echo "<h2>Shift y unshift</h2>";
    $elemento = array_shift($cestacompra); //Extrae el primero
    print_r($cestacompra);
    echo "<br>";
    print_r($elemento);
    
    echo "<br>";
    array_unshift($cestacompra, "colacao"); //Inserta al principio
    print_r($cestacompra);

    echo "<h2>Ordenación</h2>";
    //sort($capitales); Ordenar los valores (las claves desaparecen)
    asort($capitales); //Mantiene las claves
    echo "<br>";
    print_r($capitales);

    echo "<h2>Ordenación inversa</h2>";
    //rsort($capitales); Ordena los valores de manera descendente (las claves desaparecen)
    arsort($capitales); //Mantiene las claves
    print_r($capitales);

    echo "<h2>Ordenación por clave</h2>";
    ksort($capitales);
    print_r($capitales);

    echo "<h2>Ordenación por clave inversa</h2>";
    krsort($capitales);
    print_r($capitales);