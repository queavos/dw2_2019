<?php
if ($_GET['id'])
{
include 'conex.php';
$sql="delete from personas where id=".$_GET['id'];
$res=mysqli_query($conex,$sql);
if (mysqli_error($conex)==null)
{
header("Location: index.php");
}

}


 ?>
