<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion para aspirantes de universidad</title>
    <style>
        table{ 
            width:50%;
            border: 2px dotted #FF0000;

            margin:auto;
        }

       </style> 

</head>
<body>

    <?php 
    
  require("datos_conexion.php");

    $conexion=new mysqli($db_host,$db_usuario,$db_contraseña);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_select_db($conexion,$db_nombre)or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion, "utf8");

    $consulta="select * from artículos where SECCIÓN='CONFECCIÓN'";

    $resultados=mysqli_query($conexion,$consulta);

   

  
        // Esta funcion nos hace el recorrer de la base de datos}
        //Importante poner el numero de filas que hay si no dara un error de que la funcion no esta definida
        $registros=1;
        
        while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            echo "<table width='50%' align='center' border='3'><tr><td>";
            echo "<br>" . $fila['SECCIÓN'] . "</td><td>";
            echo "<br>" . $fila['NOMBRE ARTÍCULO'] . "</td><td>";    
        echo "<br>" . $fila['PRECIO'] . "</td><td>";
        echo "<br>" . $fila['PAÍS DE ORIGEN'] . "</td><td>";
           echo "<br>" . $fila['FECHA'] . "</td><td></tr></table>";
               
                    echo "<hr>"; 

         $registros++;
        }
    

   
    
   
        
    
    ?>


</body>
</html>