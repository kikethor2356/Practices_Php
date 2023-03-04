<?php 

//Este es un array multidimesional
//              1ra dimension | 2da dimen    
$alimentos=array("Fruta"=>array("Tropical"=>"kiwi",
                      "citrico"=> "mandarina",
                      "otros"=>   "manzana"),

                 "Leche"=>array("animal"=>"vaca",
                           "vegetal"=>"coco"),

                 "Carne"=>array("vacuno"=>"lomo",
                           "porcino"=> "pata"));

//Estamos imprimiendo una seccion de el array alimentos
echo $alimentos["Fruta"]["Tropical"] . "<br>";
//Hacemos la llamada de los arrays
echo $alimentos["Leche"]["animal"] .  "<br>";



//Vamos a hacer el recorrido del del array multidimensinal 
foreach($alimentos as $tipo_alim=>$alim){

    echo"<h1>$tipo_alim </h1>";

    foreach($alim as $indice =>$valor){
        echo"<p> $indice: $valor </p>";
    }
    
}

?>