<?php 
session_start();
$FechaNacimiento = $_POST['fechanac'] ?? '';

if(isset($_POST['procesar']))
{
    $SigNoSodiacal = "";

/// Obtenemos el día 

$Dia = substr($FechaNacimiento,8,2);

/// obtenemos el mes

$Mes = substr($FechaNacimiento,5,2);

/// proceso

switch($Mes)
{
    case 1: // enero

        if($Dia<=20)
        {
         $SigNoSodiacal = "Capricornio";
        }else{
            $SigNoSodiacal = "Acuario";
        }

    break;

    case 2: // febrero

        if($Dia<=19)
        {
         $SigNoSodiacal = "Acuario";
        }else{
            $SigNoSodiacal = "Piscis";
        }

    break;

    case 3: // Marzo

        if($Dia<=20)
        {
         $SigNoSodiacal = "Piscis";
        }else{
            $SigNoSodiacal = "Aries";
        }

    break;

    case 4: // Abril

        if($Dia<=20)
        {
         $SigNoSodiacal = "Aries";
        }else{
            $SigNoSodiacal = "Tauro";
        }

    break;

    case 5: // Mayo

        if($Dia<=20)
        {
         $SigNoSodiacal = "Tauro";
        }else{
            $SigNoSodiacal = "Géminis";
        }

    break;

    case 6: // Junio

        if($Dia<=21)
        {
            $SigNoSodiacal = "Géminis";
        }else{
            $SigNoSodiacal = "Cáncer";
        }

    break;

    case 7: // Julio

        if($Dia<=22)
        {
            $SigNoSodiacal = "Cáncer";
        }else{
            $SigNoSodiacal = "Leo";
        }

    break;

    case 8: // Agosto

        if($Dia<=23)
        {
            $SigNoSodiacal = "Leo";
        }else{
            $SigNoSodiacal = "Virgo";
        }

    break;

    case 9: //  Septiembre

        if($Dia<=22)
        {
            $SigNoSodiacal = "Virgo";
        }else{
            $SigNoSodiacal = "Libra";
        }

    break;

    case 10: //  Octubre

        if($Dia<=22)
        {
            $SigNoSodiacal = "Libra";
        }else{
            $SigNoSodiacal = "Escorpio";
        }

    break;

    case 11: //  Niviembre

        if($Dia<=22)
        {
            $SigNoSodiacal = "Escorpio";
        }else{
            $SigNoSodiacal = "Sagitario";
        }

    break;

    case 12: //  Septiembre

        if($Dia<=21)
        {
            $SigNoSodiacal = "Sagitario";
        }else{
            $SigNoSodiacal = "Capricornio";
        }

    break;

    
}

$_SESSION['mensaje'] = $SigNoSodiacal;

header("Location:view/signo_view.php");

}
