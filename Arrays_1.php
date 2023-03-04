<?php 

//Array indexado
//Forma numero 1 de definir un array indexado
$semana[0]="Lunes";
$semana[1]="Martes";
$semana[2]="Miercoles";
//echo "<br>" . $semana[1];


//Estamos haciendo el recorrido de el arreglo numero 1
//count es una funcion que cuenta los indices del array
for($i=0;$i<count($semana);$i++){

    echo $semana[$i]. "<br>";
 }
//Asi se agrega un nuevo elemento en el array indexado
 $semana[]="Viernes";

 for($i=0;$i<count($semana);$i++){

    echo $semana[$i]. "<br>";
 }

//Forma numero 2 de definir un array 
$semana_2=array("Lunes","Martes","Miercoles","Jueves");

//La funcion sort ordena en orden alfabetico
sort($semana_2);

//Estamos haciendo el recorrido
for($i=0;$i<count($semana);$i++){

    echo $semana_2[$i]. "<br>";
 }


echo "<br>" . $semana_2[0];




//Array asociativo
//Forma numero 1 de definir un array asociativo

    $datos=array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);

    //Asi se agrega un nuevo elemento al array asociativo
    $datos["Pais"]="España";
    
    //echo $datos ["Apellido"];

    //foreach esta haciendo el recorrido de el array 
    foreach($datos as $clave=>$valor){
        echo "<br>A $clave le corresponde $valor <br>";

    }


    //is_array es una funcion para saber si es un array o no
    // Verificamos que sea un array con esta funcion
    if(is_array($datos)){
        echo "<br> Es un array";

    }else{

        echo "<br>No es un array";
    }
?>