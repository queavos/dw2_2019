<?php

if ($_GET)
{
  require_once "../modelos/Categorias.class.php";
  $cat= new Categorias($conex);
  $cate=$cat->buscarTodo();
  require_once "../modelos/Articulos.class.php";
  $datos= new Articulos($conex);
  //$datos->id=$_GET["id"];
  $rows=$datos->buscarId($_GET["id"]);
  $row=mysqli_fetch_array($rows,MYSQLI_ASSOC);
}

if ($_POST)
{
  require_once "../modelos/Articulos.class.php";
  $datos= new Articulos($conex);
  $datos->id=$_POST["id"];
  $datos->titulo=$_POST["titulo"];
  $datos->contenido=$_POST["contenido"];
  $datos->fecha=$_POST["fecha"];
  $datos->categoria_id=$_POST["categoria_id"];
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
      <input type="text" name="titulo" value="<?php echo $row["titulo"]; ?>" placeholder="titulo de Articulo"><br />

      <input type="date" name="fecha" value="<?php echo $row["fecha"]; ?>" placeholder="fecha de Articulo"><br />
      <textarea name="contenido" rows="8" cols="80" placeholder="contenido de Articulo"><?php echo $row["contenido"]; ?></textarea>

        <br />
      <select class="" name="categoria_id">
        <?php while ($rcat=mysqli_fetch_array($cate,MYSQLI_ASSOC))
        { ?>
          <option value="<?php echo $rcat['id']; ?>"  <?php if ($row["categoria_id"]==$rcat['id']) { ?> selected <?php } ?>><?php echo $rcat['nombre']; ?></option>
        <?php  }
        ?>

      </select><br />
      <button type="submit" name="button">Enviar</button> <br />
      <a href="index.php">Volver a Lista</a>
    </form>
  </body>
</html>
