<?php 
session_start();

include("conexion.php");
$con=conectar();

$id_cancion=$_GET['id_cancion'];
//$id=$_SESSION['id_usuario'];






echo $id_cancion;

 ?>

 