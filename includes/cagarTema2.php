<?php


	  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";

	  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
	 

	  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
 

	  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/

	move_uploaded_file($_FILES['archivo']['tmp_name'],"/../mp3/" . $_FILES['archivo']['name']);

	?>