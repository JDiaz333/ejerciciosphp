<?php
    $paises = [
        "España" => [
            "Moneda" => "Euro",
            "Habitantes" => "47,420,000"
        ],
        "Italia" => [
            "Moneda" => "Euro",
            "Habitantes" => "59,110,000",
        ],
        "Japón" => [
            "Moneda" => "Yen",
            "Habitantes" => "125,700,000",
        ],
        "Argentina" => [
            "Moneda" => "Peso Argentino",
            "Habitantes" => "45,810,000",
        ],
    ];

    foreach($paises as $kpais => $vpais){
        echo "$kpais: ";
        foreach($vpais as $ksecond => $vsecond){
            echo " $ksecond = $vsecond |";
        }
        echo "<br>";
    }