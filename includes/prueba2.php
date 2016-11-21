<?php

include("../php/conexion.php");

$con=conectar();
 
  $nombre = $_FILES['file']['name'];
  $nombre_tmp = $_FILES['file']['tmp_name'];
  $tipo = $_FILES['file']["type"];
  $tamano = $_FILES['file']['size'];
 

if((strpos($nombre,"mp3")) || (strpos($tipo,"mpeg"))){
  echo $nombre;
}else{echo "error";}





?>