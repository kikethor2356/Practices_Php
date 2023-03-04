
<?php

include ("Concesionario.php");


#Compra_vehiculo::$descuento=10000;
Compra_vehiculo::descuento_gob();
$compra_Antonio=new Compra_vehiculo("compacto");
$compra_Antonio->climatizador();
$compra_Antonio->tapiceria_cuero("beige");
echo "<br>Antonio tendra que pagar: " . $compra_Antonio->precio_final();


$compra_Ana=new Compra_vehiculo("compacto");
$compra_Ana->tapiceria_cuero("Negro");
$compra_Ana->navegador_gps();
echo"<br>Ana tendra que pagar: " . $compra_Ana->precio_final();
?>
