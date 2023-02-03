<?php 

//Vamos a hacer un switch 
$kike="kike";

switch($kike){

case "kike":
    echo"Si eres tu<br>";
    break;

case "Juan":
echo"Te estas colando al sistema tramposo<br>";  
break;  

default:
echo "Usuario no registrado en la base de datos<br>";

}

$edad=30;
switch($edad){

    case $edad<=18:
    echo"ERES MENOR DE EDAD<br>";
    break;

    case $edad>18:
    echo"MUESTRA TU INE/IFE<br>";
    break;
}

$apellido="Cisneros";
switch($apellido){
   case "Juarez":
    echo"No eres tu";
    break;

    case "Cisneros":
        echo"SI eres tu pasale";
        break;
      default:
      echo "No existen registros de ese apellido";  
}



?>