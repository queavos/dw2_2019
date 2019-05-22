<?php
//UPDATE `dw2_prueba`.`pruebas` SET `campo1` = 'aaaadfsdfs', `campo2` = 'fsddf' WHERE `pruebas`.`id` = 1;
include 'conex.php';
if (isset($_GET['id']))
{
//$sql="delete from personas where id=".$_GET['id'];
$sql="select * from personas where id=".$_GET['id'];
$res=mysqli_query($conex,$sql);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
}
if ($_POST)
{
//echo "entro post";
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
//$sql="insert into personas (nombres, apellidos, fecha_nac) values ('".$_POST["nombres"]."','".$_POST["apellidos"]."','".$_POST["fecha"]."') ";
$sql="update personas nombres= "".$_POST['nombres']."", apellidos="".$_POST['apellidos']."",fecha_nac="".$_POST['fecha']."" where id=";

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
     <title>Editar Persona</title>
   </head>
   <body>
     <h2> Actualizar Persona</h2>
     <form class="" action="perso_editar.php" method="post">
       <input type="text" name="nombres" value="<?php echo $row['nombres']; ?>" placeholder="Nombres"> <br>
       <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" placeholder="Apellidos"><br>
       <input type="date" name="fecha" value="<?php echo $row['fecha_nac']; ?>" placeholder="Fecha"><br>
       <input type="submit" name="" value="Enviar"><br>
     </form>
     <a href="index.php">Volver a la lista</a>
   </body>
 </html>
