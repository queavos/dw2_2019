<?php

require_once "../modelos/Categorias.class.php";
$cat= new Categorias($conex);
$cate=$cat->buscarTodo();
//print_r($cate);
 //$total=mysqli_affected_rows($conex);

if ($_POST)
{
  require_once "../modelos/Articulos.class.php";
  $datos= new Articulos($conex);
  $datos->titulo=$_POST["titulo"];
  $datos->contenido=$_POST["contenido"];
  $datos->fecha=$_POST["fecha"];
  $datos->categoria_id=$_POST["categoria_id"];
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
    <h3>Nueva Articulos</h3>
    <form class="" action="new.php" method="post">
      <input type="text" name="titulo" value="" placeholder="titulo de Articulo"><br />

      <input type="date" name="fecha" value="" placeholder="fecha de Articulo"><br />
      <textarea name="contenido" rows="8" cols="80" placeholder="contenido de Articulo"></textarea>

        <br />


      <select class="" name="categoria_id">
        <?php while ($rcat=mysqli_fetch_array($cate,MYSQLI_ASSOC))
        { ?>
          <option value="0">Selecione Categoria</option>
          <option value="<?php echo $rcat['id']; ?>"><?php echo $rcat['nombre']; ?></option>
        <?php  }
        ?>

      </select>

      <button type="submit" name="button">Enviar</button> <br />
      <a href="index.php">Volver a Lista</a>
    </form>
  </body>
</html>
