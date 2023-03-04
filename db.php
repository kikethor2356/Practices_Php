<?php 
function conn(){
  $db_host="localhost";
  $db_name="pruebas";
  $db_usuario="root";
  $db_password="";
 

    $conectar=mysqli_connect($db_host,$db_usuario, $db_password, $db_name);
    return $conectar;









}
?>