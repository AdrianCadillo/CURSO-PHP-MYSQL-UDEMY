<?php
session_start();

 
echo isset($_SESSION['Perfil'])? $_SESSION['Perfil']:'' ;

echo "<br>";

echo isset($_SESSION['username'])?$_SESSION['username']:'';

echo "<br>";

echo isset($_SESSION['email']) ? $_SESSION['email']:'';
 

if(!isset($_SESSION['carrito']))
{
    $_SESSION['carrito'] = [];
}

if(!array_key_exists('producto3',$_SESSION['carrito']))
{
    $_SESSION['carrito']['producto3']['precio'] = 10.00;
}else{
    echo " ya existe";
}


var_dump($_SESSION['carrito']);

