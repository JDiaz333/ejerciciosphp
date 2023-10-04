<?php
    if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
        if(isset($_POST["iusuario"]) && !empty($_POST["iusuario"])){
            $usuario = $_POST["iusuario"];
        }

        if(isset($_POST["ipassword"]) && !empty($_POST["ipassword"])){
            $contraseña = $_POST["ipassword"];
        }

        if(!empty($usuario) && !empty($contraseña)){
            if(($usuario == "Admin")){
                echo "Bienvenido administrador.";
            }else{
                echo "Bienvenido $usuario.";
            }
        }else{
            echo "<h4>Introduce un usuario y contraseña válidos.</h4>";
        }
    }else{
        echo "<h2>No has llegado aquí haciendo login</h2>";
    }