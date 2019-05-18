<?php
session_start();
if($_POST)
{
include 'conex.php';
$errores=[];
if ($_POST['nombre']=="")
{
  array_push ($errores, "debe ingresar el nombre");
}
if ($_POST['email']=="")
{
  array_push ($errores, "debe ingresar el enail");
}
if ($_POST['contrasena']=="")
{
  array_push ($errores, "debe ingresar la contraseña");
}
if ($_POST['contrase_rep']=="")
{
  array_push ($errores, "debe ingresar la verificación");
}
if ($_POST['contrase_rep']!=$_POST['contrasena'])
{
  array_push ($errores, "debe ingresar la verificación igual a la contraseña");
}
if (count($errores)<=0)
{
// insert into usuarios (nombre, email, pass,fecha_reg ) values
// ()
$fecha_reg= date("Y-m-d");
$pass=md5($_POST['contrasena']);
 $insert="insert into usuarios (nombre, email, pass,fecha_reg ) values ('".$_POST['nombre']."', '".$_POST['email']."', '".$pass."', '".$fecha_reg."')";
mysqli_query (  $con ,  $insert);
if (mysqli_error($con)==null)
{
header("Location: index.php");
}

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
    <h3> Registrarse </h3>
    <div id="errores">
      <ul>
      <?php
      //print_r($errores);
      if (count($errores)>0) {
        //print_r($errores);
        foreach ($errores as $e) {
          echo "<li>".$e."</li>";
          // code...
        }

      }

       ?>  </ul>
    <div>
      <?php echo $_POST['nombre']; ?>
    <form class="" action="registrarse.php" method="post">
      <input type="text" name="nombre" placeholder="nombre"
      value="<?php echo $_POST['nombre']; ?>"> <br>
      <input type="text" name="email" placeholder="email"
      value="<?php echo $_POST['email']; ?>"> <br>
      <input type="text" name="contrasena" placeholder="Contraseña" value=""> <br>
      <input type="text" name="contrase_rep" placeholder="Contraseña de nuevo" value=""> <br>
      <input type="submit" name="" value="Enviar" />
    </form>
  </body>
</html>
