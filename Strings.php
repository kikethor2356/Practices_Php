
<style>
    .resaltar{
        color: #f00;
        font-weight:bold;
    }
    </style>

<?php 

$nombre="juan";
echo"Hola $nombre";
echo "<p class='resaltar'>Esto es un ejemplo de string</p>";

$variable1="casa";
$variable2="CASA";

$resultado=strcmp($variable1,$variable2);//Devuelve 1 si no son iguales y 0 si son iguales

if (!$resultado){
    
    echo "Coinciden";
}else{
    echo "No coniciden";
}
?>