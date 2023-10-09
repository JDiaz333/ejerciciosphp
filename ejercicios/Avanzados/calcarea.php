<?php
    echo "<h2>Calculo del área</h2>";
    if(isset($_POST["icalcular"]) && !empty($_POST["icalcular"])){
        //chequeo el radio button
        if(isset($_POST["carea"]) && !empty($_POST["carea"])){
            $figura = $_POST["carea"];
        }else{
            echo "Debes seleccionar una figura.";
        }
    }

    if($figura == "circulo"){

    }elseif($figura == "triangulo"){
        
    }else{

    }