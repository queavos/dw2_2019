<?php
require 'conex.php';
$sql="select * from personas";
//$sql="insert into personas (nombres, apellidos, fecha_nac) values (".$_POST["nombres"].",".$_POST["apellidos"].",".$_POST["fecha_nac"].") ";
$res=mysqli_query($conex,$sql);
$total=mysqli_affected_rows($conex);
//$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
 ?>
 <html>
 <body>
 <pre>
</pre>
<h2>Lista de personas</h2>
<h4>Total de personas: <?php echo $total; ?></h4>
<table>
<tr><th>nombre</th><th>apellido</th><th>fecha</th><td><a href="perso_nuevo.php">Agregar</a></td> </tr>
<?php

while ($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
?>

<tr>
  <td><?php echo $row["nombres"];  ?></td>
  <td><?php echo $row["apellidos"]; ?></td>
  <td><?php echo $row["fecha_nac"]; ?></td>
  <td> <a href="perso_editar.php?id=<?php echo $row["id"]; ?>">Editar</a></td>
  <td> <a href="perso_borrar.php?id=<?php echo $row["id"]; ?>"> borrar</a></td>
</tr>

<?php
}

 ?>
