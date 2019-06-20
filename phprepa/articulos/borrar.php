<?php

if ($_GET)
{
  //echo "entra get";
  require_once "../modelos/Articulos.class.php";
  $datos= new Articulos($conex);
  //$datos->id=$_GET["id"];
  $rows=$datos->borrarId($_GET["id"]);
  //$row=mysqli_fetch_array($rows,MYSQLI_ASSOC);
  if (mysqli_error($conex)==null)
  {
  header("Location: index.php");
  }
}
 ?>
