<?php 
/*
This code is a class of a people
Date: 04/02/2023
Aurhor:Enrique Alejandro Cisneros Gutierrez
Email address: enrique.alejandro2356@gmail.com
*/


class persona{

    var $altura;
    var $edad;
    var $ine;

    //This is my constructor method persona
    function __construct($altura,$edad,$ine)
    {
        $this->$altura="";
        $this->$edad="";
        $this->$ine="";
    }
    function movimiento_iz(){
        echo "Gire 90° hacia la izquierda <br>";
    }

    function movimiento_de(){
        echo "Gire 90° hacia la derecha <br>";

    }

    function movimiento_delante(){
        echo "Moviendome hacia adelante <br>";

    }
    
    function movimiento_atras(){

        echo "Moviendome hacia atras <br>";
    }

    function escribir(){
        
        echo "Escribiendo en ingles<br>";
    }

    function movimiento_mano_de(){
        
        echo "Puñetazo con mano derecha<br>";
       
    }

    
}

$Kratos= new persona (200,500,"NEURBRISBN455JUDID");



$Kr=1;
if ($Kr==1){
   
    $Kratos->movimiento_de();
  
}else{
    $Kratos->movimiento_mano_de();
}


$Kike =new persona(168,18,"DHDUWO3BR8483NDHDJ1");



$ke=0;
if ($ke==1){
    $Kike->movimiento_delante();
}else{
    $Kike->escribir();
    
   
}

//PROBLEMAS A VER EN REUNION Y DUDAS

//echo $Kike->{$ine};



?>

