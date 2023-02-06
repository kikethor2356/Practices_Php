<?php 

//This is a class
class Coche{

    //These are 3 attributes   
       protected $ruedas;
       protected $puertas;
       public $color;
       private $motor;
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
   //Ver esta funcion en la reunion 
       function estable_color($color_Camion,$nombre_Camion){
   
           $this->color=$color_Camion;
   
           echo "El color de" . $nombre_Camion . "es: " . $this->color;
       }

       function get_motor(&$motor){
         $this->motor=$motor;
       }
       
   }

   ////////////////////////////////////////////////////////////
   //This is a class
   //Heredamos la clase coche a la de camion
   class Camion extends Coche{

    
   //This is a constructor method
       function Camion(){
           //Initial states
            $this->ruedas=8;
            $this->color="Gris";
            $this->motor=2600;
            $this->puertas=2;
       }
    
      function arrancar()
      {
        parent::arrancar();
        echo "Camion arrancado";
      }

   }

?>