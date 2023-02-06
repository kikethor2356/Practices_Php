<?php 
/*
$palabra="JUAN";

echo(strtolower($palabra . "<br>"));


$pala="kike";
echo(strtoupper($pala . "<br>"));

$num1=5;
$num2=rand(1,100);

function suma($num1,$num2){
    $result=$num1+$num2;
        return $result;

}

echo suma($num1,$num2);
*/



function frase_mayus($frase,$conversion=true){
$frase=strtolower($frase);
if($conversion==true){

    $resultado=ucwords($frase);

}else{
    $resultado=strtoupper($frase);
}
return $resultado;



}

echo (frase_mayus("Esto es una prueba",false));
?>gfhgfffgfgg