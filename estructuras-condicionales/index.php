<?php 

$salario = 3500;

$Cargo = "Programador";

$Aumento = 0.00;

// admin 3% , contador 5% programador 7%

if($Cargo === 'Administrador'):
$Aumento = $salario*0.03;

else:

    if($Cargo === 'Contador'):

        $Aumento = $salario * 0.05;

    else:

       $Aumento = $salario*0.07; 

    endif;
endif;

$salario = $salario +$Aumento;

echo "nuevo salario {$salario}";