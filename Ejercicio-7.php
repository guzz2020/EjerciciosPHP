<!DOCTYPE html>
<html>
<body>

<h1>Ejercicio 7.2</h1>
<?php

// Este ejercicio corresponde a utilizacion de Formularios en PHP
header ("Content-type: text/html;charset =\"utf-8\"");

/*Enviar informacion del navegador 
hasta el lado del servidor*/
echo "<h1>".$_GET ['clase']."</h1>";
echo "<h2>".$_GET ['periodo']."</h2>";

function primo($numero)
{
    $contador=0;

    for ($i=2;$i<=$numero;$i++)

    {
        if($numero%$i==0)
        {
        if(++$contador>1)
        return false;
        }

    }
return true;
}



if (ctype_digit($_GET['numero']) && $_GET ['numero']>0)
{
    echo "<h3> Validado </h3>";
    $numeroprimo= (int) $_GET['numero'];
    echo "<h1>$numeroprimo</h1>";
    if (primo($numeroprimo))
   //if($numeroprimo=1)
        {
        echo "Es un NUMERO PRIMO";
        }
    else
        {
        echo "NO ES UN NUMERO PRIMO";   
        }
}
else
{
    echo "<h3> No es un numero valido</h3>";
}





?>

<form>
Escribe un numero:

<input name="numero" type="text" placeholder="Ingrese numero" >
<input type="submit" value="Evaluar">
</form>

</body>
</html>