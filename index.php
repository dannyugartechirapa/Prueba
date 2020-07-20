<?php

echo "Hola mundo sin git <br>";




echo <<<_END
        
        <form action="index.php"  method="post">
        Nombre  <input type="text" name="nombre">
        <input type="submit" value="INGRESAR">
        </form>
_END;


if(isset($_POST["nombre"] )){

    echo "Tu nombre es ".$_POST["nombre"];
}




?>