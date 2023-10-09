<?
    $err = null;
    if(isset($_POST["ienviar"]) && !empty($_POST["ienviar"])){
        if(isset($_POST["iusuario"]) && !empty($_POST["iusuario"])){
            $usuario = $_POST["iusuario"];
        }else{
            $err = true;
        }

        if(isset($_POST["ipassword"]) && !empty($_POST["ipassword"])){
            $contraseña = $_POST["ipassword"];
        }else{
            $err = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoriza todo uno</title>
</head>
<body>
<h2>Página login</h2>
<?
    if($err){
        $msg="<p style=\"color: red\">Error al introducir las credenciales</p>";
        echo $msg;
    }
?>
    <form name="flogin" action= "<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <div>
            <label for="usuario">Introduce usuario:</label>
            <input type="text" name="iusuario" id="usuario">
            <br><br><br>
            <label for="password">Introduce contraseña:</label>
            <input type="text" name="ipassword" id="password">
        </div>
        <br>
        <input type="submit" name="ienviar" value="Enviar">
    </form>
</body>
</html>