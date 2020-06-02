<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7.1</h1>
<?php

// EJERCICIO 7
header ("Content-type: text/html;charset =\"utf-8\"");

/*EVALUAR SI UN NUMERO ES:
 PRIMO O NO */
 if (is_numeric($_GET['numero']) && $_GET ['numero']=1)
 echo "<h3> ES UN NUMERO PRIMO</h3>";
 else
 $contador=0;
 for ($i=0;$i<='numero';$i++)
 {
     if ('numero'%$i==0)
     $contador =$contador + 1;
 }
 
 if ($contador > 2) 
 echo "<h3> ES UN NUMERO PRIMO</h3>";
 else
 echo "<h3> NO ES UN NUMERO PRIMO</h3>";

?>

<form>
Ingrese un numero valido:
<input name="numero" type="text" placeholder="INGRESE NUMERO" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>