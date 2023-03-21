<?php

session_start();
/*
Implementar el problema anterior 
para devolver los número primos en un 
rango de números, por ejemplo [12-190]
*/

$NumeroInicial = $_POST['numeroi'] ?? '';

$NumeroFinal = $_POST['numerof'] ?? '';

$Aux_I = $NumeroInicial;

$Aux_F = $NumeroFinal;

$Primos = "";

if(isset($_POST['procesar']))
{
    do{
        $J = 1;$contador = 0;
    
        do{
    
            if($NumeroInicial%$J === 0)
            {
                $contador++;
            }
    
            $J++;
        }while($J<=$NumeroInicial);
    
        if($contador == 2)
        {
    
            $Primos.=$NumeroInicial." - ";
        }
    
        $NumeroInicial++;
    }while($NumeroInicial<=$NumeroFinal);
    
    $Primos = rtrim($Primos," - ");

    $_SESSION['mensaje'] = $Primos;

    header("Location:view/vista.php");
}