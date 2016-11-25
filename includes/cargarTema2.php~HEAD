<?php
	$carpeta="../mp3/";
	opendir($carpeta);
	$destino=$carpeta.$_FILES['foto']['name'];
	copy($_FILES['foto']['tmp_name'],$destino);
	echo "subido<br>";
	$nombre=$_FILES['foto']['name'];
	echo "<img src=\"../mp3/$nombre\"><br>";
	//echo $_FILES['foto']['nombre'];
	echo $_FILES['foto']['error'];
	?>