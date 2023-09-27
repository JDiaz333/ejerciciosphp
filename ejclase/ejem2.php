<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>
        <?php
            $var1 = "¡Hola,";
            $var2 = "soy un script de PHP!";
            echo $var1 . "<br>" . $var2;

            print "<br> Hola";
            print_r ($var1);
            var_dump("<br> d");

            $numero = 7;
            $cad1 = "Una cadena: $numero";
            $cad2 = 'Otra cadena: $numero';
            echo $cad1 . "<br>" . $cad2;
        ?>
    </body>
</html>