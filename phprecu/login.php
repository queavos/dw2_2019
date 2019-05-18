<?php
session_start();
if($_POST)
{
include 'conex.php';
$errores=[];
if ($_POST['email']=="")
{
  array_push ($errores, "debe ingresar el enail");
}
if ($_POST['contrasena']=="")
{
  array_push ($errores, "debe ingresar la contraseña");
}
if (count($errores)<=0)
{
$usuario=$_POST['email'];
$pass=md5($_POST['contrasena']);
  $sql="select * from usuarios where email='".$usuario."'";
 $res=mysqli_query($con, $sql);
 if ($fila=mysqli_fetch_array ($res))
 {
  if ($fila['pass']==$pass)
    {
      $_SESSION['usuario']=$usuario;
      //$_SESSION['fecha_login']=now();
    header("Location: index.php");
    }
    else
    {
      echo "no se encontro usuario";
    }
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
    <form class="" action="login.php" method="post">
      <input type="text" name="email" placeholder="email"
      value=""> <br>
      <input type="password" name="contrasena" placeholder="Contraseña" value="">
      <input type="submit" name="" value="Enviar" />
    </form>
  </body>
</html>
