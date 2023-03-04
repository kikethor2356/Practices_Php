<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name ="form" action="registro.php" method="POST">
  <fieldset>
    <legend>Información de producto</legend>
    Seccion:<input type="text" id="seccion" name="seccion" required><br><br>
    Nombre:<input type="text" id="nombre" name="nombre" required><br><br>
    Fecha:<input type="text" id="fecha" name="fecha" required><br><br>
    Precio:<input type="text" id="precio" name="precio" required><br><br>
    Pais:<input type="text" id="pais" name="pais" required><br><br>
    <input type="submit" value="Registrar">
    <input type="reset" value="Borrar">


  </fieldset>
</form>

</body>
</html>