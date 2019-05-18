<?php
session_start();
include 'conex.php';
$sql="SELECT * FROM usuarios";
$res=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>bienvenido <?php echo $_SESSION['usuario']; ?> </h1>
    <table>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>email</th>
        <th>fecha_reg</th>
        <th><a href="registrarse.php">Registrarse</a></th>
      </tr>
<?php while ($fila=mysqli_fetch_array ( $res)){  ?>
<tr>
  <td><?php echo $fila['id']; ?></td>
  <td><?php echo $fila['nombre']; ?></td>
  <td><?php echo $fila['mail']; ?></td>
  <td><?php echo $fila['fecha_reg']; ?></td>
  <td></td>
</tr>
<?php } ?>
    </table>
  </body>
</html>
