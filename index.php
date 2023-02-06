<?php 

include("vehi1.php");

$Mazda=new Coche();

$Ferrari=new Coche();

$Ford=new Coche();

$pegazo=new Camion();

$pegazo->frenar();

echo "El Ferrari tiene " . $Ferrari->getRuedas() . " ruedas <br>";

echo "El pegazo tiene " . $pegazo->getRuedas() . " ruedas <br>";


echo $Ferrari->getMotor();
echo "<br>";
echo $Ford->getMotor();
echo "<br>";
echo $Mazda->getPuertas();




/* 
//This is a class
class Coche{

 //These are 3 attributes   
    var $ruedas;
    var $puertas;
    var $color;
    var $motor;
//This is a constructor method
    function Coche(){
        //Initial states
         $this->ruedas=4;
         $this->color="";
         $this->motor=1600;
         $this->puertas=4;
    }
 
    //These are 3 methods
    function arrancar(){
        echo "Estoy arrancando <br>";

    }

    function girar(){
        echo "Estoy girando <br>";

    }

    function frenar(){
        echo "Estoy frenando <br>";

    }

    function estable_color($color_coche,$nombre_coche){

        $this->color=$color_coche;

        echo "El color de" . $nombre_coche . "es: " . $this->color;
    }
}

//These are 3 instances to class *Coche*
    $Ferrari=new Coche(); //Damos estado inicial al objeto o instacia  *Coche*

    $Mazda=new Coche();

    $Ford=new Coche();
    
    $Mazda->girar();

    $Ferrari->estable_color("Rojo <br>"," Ferrari ");

    $Ford->estable_color("Azul", " Ford ");

    echo $Ferrari->motor;
    echo $Ford->motor;
    echo $Mazda->puertas;
 */ 
?>