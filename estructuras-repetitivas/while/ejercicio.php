<?php
session_start();
/*
Crear un programa , que me 
permita ingresar un número, 
luego  imprima por pantalla
si el número  es primo o no lo es.
*/


$numero = $_POST['numero'] ?? '';

$i = 1;$contador = 0;

$aux = $numero;$mensaje = "";

if(isset($_POST['procesar']))
{
    
while($i<=$numero)
{
    if($numero % $i == 0)
    {
     $contador++;
    }

    $i++;
}

if($contador == 2)
{
     $mensaje = "el numero $aux es primo";
}else{
    $mensaje = "el numero $aux no es primo";
}

$_SESSION['mensaje'] = $mensaje;

header("Location:view/");
}