<?php
require_once "../conex.php";
/**
 *
 */
class Articulos
{
  var $id;
  var $titulo;
  var $contenido;
  var $fecha;
  var $categoria_id;
  var $conn;
  function Articulos($conex)
  {
    $this->conn=$conex;
  }
  function buscarTodo()
  {
      $sql="select * from articulos";
      return mysqli_query($this->conn,$sql);
  }

  function buscarId($id)
    {
      $sql="select * from articulos where id=".$id;
      return mysqli_query($this->conn,$sql);
    }


    function insertar()
    {
       $sql="insert into articulos (titulo, contenido, fecha, categoria_id) values ('".$this->titulo."' , '".$this->contenido."' , '".$this->fecha."' , '".$this->categoria_id."')";
      return mysqli_query($this->conn,$sql);
    }
    function modificar()
    {
       $sql="update articulos set titulo='".$this->titulo."', contenido='".$this->contenido."', fecha='".$this->fecha."', categoria_id='".$this->categoria_id."'  where id=".$this->id;
      return mysqli_query($this->conn,$sql);
    }
    function borrarId($id)
      {
        echo $sql="delete from articulos where id=".$id;
        return mysqli_query($this->conn,$sql);
      }

}

 ?>
