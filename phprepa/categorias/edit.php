<?php

if ($_GET)
{
  echo "entra get";

  require_once "../modelos/Categorias.class.php";
  $datos= new Categorias($conex);
  //$datos->id=$_GET["id"];
  $rows=$datos->buscarId($_GET["id"]);
  $row=mysqli_fetch_array($rows,MYSQLI_ASSOC);
}

if ($_POST)
{
  require_once "../modelos/Categorias.class.php";
  $datos= new Categorias($conex);
  $datos->id=$_POST["id"];
  $datos->nombre=$_POST["nombre"];
  $datos->modificar();
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
    <h3>Editar Categoria</h3>
    <form class="" action="edit.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
      <input type="text" name="nombre" value="<?php echo $row["nombre"]; ?>" placeholder="nombre de categoria"><br />
      <button type="submit" name="button">Enviar</button> <br />
      <a href="index.php">Volver a Lista</a>
    </form>
  </body>
</html>
