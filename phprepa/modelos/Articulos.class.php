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

}

 ?>
