<?php 

  if(isset($_POST["enviando"])){


    $usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];
    if($usuario=="Juan" && $edad>=16){
      echo "<p class='validado'>Puedes entrar</p>";
    }else{
      echo "<p class='no_validado'>No puedes entrar</p>";
    }
  }

?>
