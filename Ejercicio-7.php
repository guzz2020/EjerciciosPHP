<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 6</h1>
<?php

// EJERCICIO 7
header ("Content-type: text/html;charset =\"utf-8\"");

/*EVALUAR SI UN NUMERO ES:
 PRIMO O NO */

if (is_numeric($_GET['numero']) && $_GET ['edad']>=1)
{
    echo "<h3> CORRECTO ".$_GET['nombre']. " ".$_GET['apellido']."</h3>";

}
else
{
    echo "<h3> No es un numero valido</h3>";
}

?>

<form>
Ingrese un numero valido:
<input name="numero" type="text" placeholder="INGRESE NUMERO" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>