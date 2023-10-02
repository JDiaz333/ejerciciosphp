<?php
    echo "<h1>Check Variables: isset, empty, is_null</h1>";
    $numero = 9;
    $cero = 0;
    $vacia = "";
    $varnula = NULL;

    var_dump($numero);
    //echo, prin, print_r, var_dump (valor y el tipo)
    echo "<h3>Número (entero)</h3>";
    echo "¿Establecida?: " . var_dump(isset($numero));
    echo "¿Vacía?" . var_dump(empty($numero));
    echo "¿Nula?" . var_dump(is_null($numero));

    echo "<h3>Cero</h3>";
    echo "¿Establecida?: " . var_dump(isset($cero));
    echo "¿Vacía?" . var_dump(empty($cero));
    echo "¿Nula?" . var_dump(is_null($cero));

    echo "<h3>Vacía</h3>";
    echo "¿Establecida?: " . var_dump(isset($vacia));
    echo "¿Vacía?" . var_dump(empty($vacia));
    echo "¿Nula?" . var_dump(is_null($vacia));

    echo "<h3>Nula</h3>";
    echo "¿Establecida?: " . var_dump(isset($varnula));
    echo "¿Vacía?" . var_dump(empty($varnula));
    echo "¿Nula?" . var_dump(is_null($varnula));

    echo "<h3>Variable inexistente</h3>";
    echo "¿Establecida?: " . var_dump(isset($varca));
    echo "¿Vacía?" . var_dump(empty($varca));
    echo "¿Nula?" . var_dump(is_null($varca));