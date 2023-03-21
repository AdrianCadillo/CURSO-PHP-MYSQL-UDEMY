<?php 
session_start();

$Nombre = $_POST['name_usu'] ?? '';

$Salario = $_POST['salario'] ?? '';

$Cargo = $_POST['cargo'] ?? '';

$Aumento = 0.00;

/// creamos constantes para los aumentos

define("SISTEMAS",0.20);define("ADMIN",0.15);define("CONTADOR",0.14);

define("PROGRAMADOR",0.16);



if(isset($_POST['procesar']))
{
   if(empty($Salario)){
    $_SESSION['mensaje'] = 'Ingrese el salario';
   }else
   {
    if($Cargo === 'Ing.de sistemas')
    {
      $Aumento = SISTEMAS*$Salario;
    }
    else{
       if($Cargo === 'Administrador')
       {
           $Aumento = ADMIN*$Salario;  
       }
       else
       {
           if($Cargo === 'Contador')
           {
               $Aumento = CONTADOR*$Salario;
           }
           else
           {
               $Aumento = PROGRAMADOR*$Salario;
           }
       } 
    }
   
    $Salario = $Salario + $Aumento;

    $_SESSION['mensaje'] = "el nuevo salario del trabajador de cargo $Cargo es $Salario soles";

   }
    echo "<script>history.go(-1)</script>";
 //header("Location:".$_SERVER['HTTP_REFERER']);
} 