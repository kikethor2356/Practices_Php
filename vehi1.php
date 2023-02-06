<?php 

//This is a class
class Coche{

    //These are 3 attributes   
      private  $ruedas;
      private  $puertas;
      private  $color;
      private  $motor;
   //This is a constructor method
       function __construct(){
           //Initial states
            $this->ruedas=4;
            $this->color="Gris";
            $this->motor=1600;
            $this->puertas=4;
       }

       public function getRuedas(){
        return $this->ruedas;
       }
       public function getPuertas(){
        return $this->puertas;
       }
       public function getMotor(){
        return $this->motor;
       }


       public function setRuedas($valorRuedas){
        $this->ruedas=$valorRuedas;
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
   
       function estable_color($color_Camion,$nombre_Camion){
   
           $this->color=$color_Camion;
   
           echo "El color de" . $nombre_Camion . "es: " . $this->color;
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
    


      /**
       * Get the value of color
       */ 
      public function getColor()
      {
            return $this->color;
      }

      /**
       * Set the value of color
       *
       * @return  self
       */ 
      public function setColor($color)
      {
            $this->color = $color;

            return $this;
      }
   }

?>