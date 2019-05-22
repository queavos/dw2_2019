<?php

if ($_POST)
{
//echo "entro post";
require 'conex.php';
$mensajes=[];
if ($_POST['nombres']=="")
{
  array_push($mensaje,"Debe ingresar un nombre");
}
if ($_POST['apellidos']=="")
{
  array_push($mensaje,"Debe ingresar un apellido");
}
if ($_POST['fecha']=="")
{
  array_push($mensaje,"Debe ingresar una fecha");
}
if (count($mensajes)==0)
{
$sql="insert into personas (nombres, apellidos, fecha_nac) values ('".$_POST["nombres"]."','".$_POST["apellidos"]."','".$_POST["fecha"]."') ";
$res=mysqli_query($conex,$sql);
if (mysqli_error($conex)==null)
{
//echo "se guardo!";
header("Location: index.php");
}
//$total=mysqli_affected_rows($con);
}

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nueva Persona</title>
  </head>
  <body>
    <h2> Agregar Persona</h2>
    <form class="" action="perso_nuevo.php" method="post">
      <input type="text" name="nombres" value="" placeholder="Nombres"> <br>
      <input type="text" name="apellidos" value="" placeholder="Apellidos"><br>
      <input type="date" name="fecha" value="" placeholder="Fecha"><br>
      <input type="submit" name="" value="Enviar"><br>
    </form>
    <a href="index.php">Volver a la lista</a>
  </body>
</html>
