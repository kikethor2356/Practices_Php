<?php 
//Recibo todos los datos del formulario
      include("db.php");
      $seccion=$_POST['seccion'];
      $pais=$_POST['pais'];
      $nombre=$_POST['nombre'];
      $fecha=$_POST['fecha'];
      $precio=$_POST['precio'];

            echo "PROCESANDO.......";

            $conectar=conn();
            $sql="DELETE FROM Articulos WHERE nombre='$nombre'";
            $resul = mysqli_query($conectar,$sql) or die("Query failed: " . mysqli_error($conectar));

      if ($resul==false){
            echo "Error en la consulta";
            }else{
      #echo "<p>Registro eliminado: $nombre.";

      #echo mysqli_affected_rows($conectar);
      if(mysqli_affected_rows($conectar)==0){
            echo"<br>No hay registros que eliminar con ese criterio";
            }else{
            echo "Se han eliminado". mysqli_affected_rows($conectar) . "registros";
            }
      }
?>