<?php
require_once "../conex.php";
/**
 *
 */
class Categorias
{
  var $id;
  var $nombre;
  var $conn;
  function Categorias($conex)
  {
    $this->conn=$conex;
  }
  function buscarTodo()
  {
      $sql="select * from categorias";
      return mysqli_query($this->conn,$sql);
  }
function buscarId($id)
  {
    $sql="select * from categorias where id=".$id;
    return mysqli_query($this->conn,$sql);
  }


  function insertar()
  {
    $sql="insert into categorias (nombre) values ('".$this->nombre."')";
    return mysqli_query($this->conn,$sql);
  }
  function modificar()
  {
    echo $sql="update categorias set nombre='".$this->nombre."' where id=".$this->id;
    return mysqli_query($this->conn,$sql);
  }
  function borrarId($id)
    {
      echo $sql="delete from categorias where id=".$id;
      return mysqli_query($this->conn,$sql);
    }
}

 ?>
