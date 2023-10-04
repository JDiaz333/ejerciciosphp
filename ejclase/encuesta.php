<?php
    echo "<h2>Resultado encuestas</h2>";
if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
    //chequeo el radio button
    if(isset($_POST["lprog"]) && !empty($_POST["lprog"])){
        $lenguaje = $_POST["lprog"];
        echo "<h4>Tu lenguaje preferido es: $lenguaje</h4>";
    }

    //chequeo el checkbox
    //echo "<br>Num elementos: " . count($_POST["ntrans"]);
    if(isset($_POST["ntrans"]) && !empty($_POST["ntrans"])){
        $transportes = $_POST["ntrans"];
        foreach($transportes as $transporte){
            echo "<br>Transporte seleccionado: " . $transporte;
        }
    }else{
        echo "<br>No has seleccionado ningún transporte.";
    }

     //chequeo el select simple
     if(isset($_POST["sfutbol"]) && !empty($_POST["sfutbol"])){
        $equipo = $_POST["sfutbol"];
        echo "<h4>Tu equipo preferido es: $equipo</h4>";
    }
}