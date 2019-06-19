<?php
if ($_POST)
{
  require_once "../modelos/Categorias.class.php";
  $datos= new Categorias($conex);
  $datos->nombre=$_POST["nombre"];
 $datos->insertar();
if (mysqli_error($conex)==null)
{
header("Location: index.php");
}
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Nueva Categoria</h3>
    <form class="" action="new.php" method="post">
      <input type="text" name="nombre" value="" placeholder="nombre de categoria"><br />
      <button type="submit" name="button">Enviar</button> <br />
      <a href="index.php">Volver a Lista</a>
    </form>
  </body>
</html>
