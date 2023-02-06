<?php 


/*
function incrementa(&$valor){

    $valor++;
        return $valor;

}
$numero=6;

echo incrementa($numero) . "<br>";


echo $numero;
*/
function cambia_mayus(&  $param){

    $param=strtolower($param);

    $param=ucwords($param);

    return $param;

}

$cadena="HoLa mUndO";
echo cambia_mayus($cadena) . "<br>";
echo $cadena;

?>