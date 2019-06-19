<?php
require_once "../modelos/Categorias.class.php";
$datos= new Categorias($conex);
$rows=$datos->buscarTodo();
 //$total=mysqli_affected_rows($conex);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border=1>
      <tr>
        <th>Código</th>
        <th>Categoria</th>
        <th colspan=2><a href="new.php" >Nuevo</a></th>
      </tr>
<?php while ($row=mysqli_fetch_array($rows,MYSQLI_ASSOC)) { ?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["nombre"]; ?></td>
<td><a href="edit.php?id=<?php echo $row["id"]; ?>" >Editar</a></td>
<td><a href="borrar.php?id=<?php echo $row["id"]; ?>" >Borrar</a></td>
</tr>
  <?php
}
   ?>
 </table>
</body>
</html>
