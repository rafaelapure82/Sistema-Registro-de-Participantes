<?php
$mysqli = new mysqli('localhost', 'root', '', 'animales');

if ($mysqli->connect_error){
  die ('Error de conexion' . $mysqli->connect_error);
}

?>
