<?php
    if(isset($_POST["fdivision"]) && !empty($_POST["fdivision"])){
        try{
            if($_POST["num2"] == 0){
                throw new Exception("El divisor es cero");
            }
        }catch(Exception $e){
            echo "Se ha producido una excepcion: " . $e->getMessage();
        }finally{
            echo "<br>Esto siempre se ejecuta";
        }
    }