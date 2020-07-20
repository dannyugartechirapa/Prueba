<?php

echo "Hola mundo sin git <br>";




echo <<<_END
        
        <form action="index.php"  method="post">
        Nombre  <input type="text" name="nombre">
        Nombre  <input type="text" name="apellido">
        <input type="submit" value="INGRESAR">
        </form>
_END;


if(isset($_POST["nombre"] && isset($_POST["apellido"]) )){

    echo "Tu nombre es ".$_POST["nombre"]."<br>";
    echo "Tu apellido es ".$_POST["apellido"];
}




?>