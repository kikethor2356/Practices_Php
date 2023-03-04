<?php 
//Recibo todos los datos del formulario
include("db.php");
$seccion=$_POST['seccion'];
$pais=$_POST['pais'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$precio=$_POST['precio'];


echo "Los datos son los siguientes:<br>";
echo "<p>Sección: $seccion<p>Nombre del producto: $nombre<p>Fecha de registro: $fecha<p>Precio del producto: $precio<p>Pais donde fue creado: $pais";


$conectar=conn();
$sql="INSERT INTO Articulos (seccion,nombre,fecha,pais,precio) 
      VALUES ('$seccion','$nombre','$fecha','$pais','$precio')";
$resul = mysqli_query($conectar,$sql) or die("Query failed: " . mysqli_error($conectar));

echo "<p>Se a agregado el producto llamado: $nombre.";

?>