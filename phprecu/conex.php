<?php
$servidor="localhost";// 127.0.0.1
$usuario="root";
$password="";
$db="dw2_blog";
$con = mysqli_connect($servidor,$usuario,$password,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
