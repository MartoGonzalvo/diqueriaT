<?php 

include("conexion.php");

$con=conectar();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cont = $_POST['cont'];

$query = "INSERT INTO usuario (id_usuario,nombre, apellido, email,contrasena,tiene_id_perfi, tiene_id_ubicacion) VALUES (NULL, '".$nombre."', '".$apellido."', '".$email."','".$cont."', 1, 1)";

$rs = mysqli_query($con, $query);

echo '<div id="msj">
		<div class="alert alert-success" role="alert">Su usuario ha sido creado! </div>
	  </div>';

 ?>