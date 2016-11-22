<?php
session_start();

include("../php/conexion.php");
$con=conectar();
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
$estado=$_POST['estado'];
$id=$_SESSION['id_usuario'];

$query = "INSERT INTO playlist (id_playlist, nombre, genero,foto,crea_id_usuario, estado) VALUES (NULL, '".$nombre."', '".$genero."','','".$id."',  '".$estado."')";

		$rs = mysqli_query($con, $query);


header("Location: ../php/playlist.php");



?>