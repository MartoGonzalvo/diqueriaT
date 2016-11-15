<?php 

include("conexion.php");

$con=conectar();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$cont = $_POST['cont'];
$rcont=$_POST['rcont'];
$titulo="Registro Disqueria T";
$mensaje="el usuario se a registrado con exito";
$cabeceras="mgonzalvo@conabip.gob.ar";

    $buscarUsuario = "SELECT * FROM usuario WHERE email = '$email' ";
	 
	 $result =mysqli_query($con,$buscarUsuario);
	 
	 $count = mysqli_num_rows($result);
	 
	 if ($count == 1) {
	 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";
	 
	 echo "<a href='../index.php'>Por favor escoga otro Nombre</a>";
		}else{


	if($cont==$rcont){
		$query = "INSERT INTO usuario (id_usuario,nombre, apellido, email,contrasena,tiene_id_perfi, tiene_id_ubicacion, estado) VALUES (NULL, '".$nombre."', '".$apellido."', '".$email."','".$cont."', 2, 1,'activo')";

		$rs = mysqli_query($con, $query);
		mail($email, $titulo, $mensaje, $cabeceras);
		header("Location: ../index.php");

		}else{
			header ("Location:../registro.inc");
			}

		echo '<div id="msj">
				<div class="alert alert-success" role="alert">Su usuario ha sido creado! </div>
			  </div>';
			}
		 ?>