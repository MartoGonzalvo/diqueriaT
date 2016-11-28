<?php

	ini_set('upload_max_filesize','100M');
	$carpeta="../mp3/";
	opendir($carpeta);
	$nombre=$_FILES['tema']['name'];
	$destino=$carpeta.$nombre;
	
	move_uploaded_file($_FILES['tema']['tmp_name'],$destino);

	
	
	$nombre=$_FILES['tema']['name'];
	//echo "<img src=\"../mp3/$nombre\"><br>";
	echo $_FILES['tema']['name'] ;
	echo $_FILES['tema']['error'];

$artista = $_POST['artista'];
$genero = $_POST['genero'];
$titulo = $_POST['titulo'];


include("../php/conexion.php");

$con=conectar();

	$query = "INSERT INTO cancion (id_cancion,artista, genero, titulo,ubicacion) VALUES (NULL, '".$artista."', '".$genero."', '".$titulo."','".$nombre."')";

		$rs = mysqli_query($con, $query);
		echo '<script language="javascript">alert("El tema fue subido");</script>';
?><meta http-equiv="refresh" content="0; url=../php/usuario.php" /> 
	?>


