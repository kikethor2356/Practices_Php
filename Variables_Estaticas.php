<?php 


function Incremtento(){
   static $contador=0;
    $contador++;
    echo $contador."<br>";

}
 Incremtento();
 Incremtento();
 Incremtento();
 Incremtento();
?>