<?php
	ini_set('post_max_size','100M');
	$carpeta="../mp3/";
	opendir($carpeta);
	$destino=$carpeta.$_FILES['foto']['name'];
	
	move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
	echo "subido<br>";
	$nombre=$_FILES['foto']['name'];
	//echo "<img src=\"../mp3/$nombre\"><br>";
	echo $_FILES['foto']['name'] ;
	echo $_FILES['foto']['error'];
	?>