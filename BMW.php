<?php
// Definimos la clase
class Coche{
     
    // Atributos
    public $color;
    public $modelo = "BMW Generico";
    public $velocidad;
     
    //Métodos
    public function getColor(){
 
          // Con el operador $this le decimos que busque el atributo     color en esta clase
        return $this->color;
    }
     
    public function setColor($color){
        $this->color = $color;
        
    }
     
    public function acelerar(){
        $this->velocidad++;
    }
     
    public function frenar(){
        $this->velocidad--;
    }
     
    public function getVelocidad(){
        return $this->velocidad;
    }
}

// Creamos el objeto / Instanciamos la clase
$coche = new Coche();
 
// Usamos los métodos
$coche->setColor("ROJO");
echo "Color del coche: ".$coche->getColor();
 
// Le sumamos 3 y le restamos 1 al atributo
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
 
echo "<br/> Velocidad actual: ".$coche->getVelocidad();
