<?php
session_start();

include("../php/conexion.php");
$con=conectar();
$nombre=$_POST['nombre'];
$genero=$_POST['genero'];
$estado=$_POST['estado'];
$id=$_SESSION['id_usuario'];

   ini_set('post_max_size','100M');
	$carpeta="../images/playlist/";
	opendir($carpeta);
	$destino=$carpeta.$_FILES['foto']['name'];
	
	move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
	echo "subido<br>";
	$nombreFoto=$_FILES['foto']['name'];
	//echo "<img src=\"../mp3/$nombre\"><br>";
	echo  $_FILES['foto']['name'] ;
	echo $_FILES['foto']['error'];






$query = "INSERT INTO playlist (id_playlist, nombre, genero,foto,fecha,crea_id_usuario, estado) VALUES (NULL, '".$nombre."', '".$genero."','".$_FILES['foto']['name']."',now(),'".$id."',  '".$estado."')";

		$rs = mysqli_query($con, $query);


header("Location: ../php/playlistUsuario.php?");



?> 