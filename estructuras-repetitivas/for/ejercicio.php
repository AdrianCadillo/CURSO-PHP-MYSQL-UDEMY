 <?php 

 /*
 Implementar un programa en php con 
 bucle for, que le permita a un   
 usuario ingresar su fecha de nacimiento, 
 y a través de ello imprimir por pantalla 
 su número de la suerte. Ejemplo : 

Fecha Nacimiento : 
05/10/1997 --> 5 + 10 +1997 = 2012
 --> 2+0+1+2 = 5
 */

  
 /*
 Implementar un programa
  en php con bucle 
 for, que le permita 
 a un   usuario ingresar
  su fecha de nacimiento, 
  y a través de ello 
  imprimir por pantalla 
  su número de la suerte.
   Ejemplo : 

Fecha Nacimiento : 05/10/1997 -->
 5 + 10 +1997 = 2012 --> 2+0+1+2 = 5
 */

 $FechaNacimiento = $_POST['fecha_nac'] ?? '';

 $SumaFechaNac = 0;

 $Resto = 0;

 $Sumatoria =0;

 $NumeroSuerte = 0;
if(isset($_POST['procesar']))
{
    
 /// obtener el año, mes y día

 // año

 $Anio = substr($FechaNacimiento,0,4);

 $Mes = substr($FechaNacimiento,5,2);

 $Dia = substr($FechaNacimiento,8,2);

 $SumaFechaNac = $Anio+$Mes+$Dia;

 for($i=$SumaFechaNac;$i<>0;)
 {
  $Resto = floor($i)%10;

  $i/=10;

  $Sumatoria += $Resto;
 }

 for($i=$SumaFechaNac;$i<>0;)
 {
  $Resto = floor($i)%10;

  $i/=10;

  $NumeroSuerte += $Resto;
 }

 echo $NumeroSuerte;

}

 

