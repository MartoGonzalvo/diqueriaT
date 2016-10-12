<?php
include("conexion.php");
$con=conectar();
session_start();
	
	$nombre=$_POST['name'];
	$password= $_POST['pass'];
	$consulta = mysql_query("SELECT * FROM usuario WHERE nombre = '$nombre' and apellido = '$password' ");
 
		if(  mysql_num_rows($consulta) != 1 ){
			header("Location: ../index.php?error=1"); //TODO: revisar
			exit();
		}else{
		
			$fila = mysql_fetch_assoc($consulta);
			$_SESSION["nombre"] = $fila['nombre'];
			
			
			switch($fila["id_usuario"]){
				case 1:
				header("Location: ../usuario.php");
				exit();
				break;
				case 2:
				header("Location: administrativo.php");
				exit();
				break;
				case 3:
				header("Location: suoervisor.php");
				exit();
				break;
				case 4:
				header("Location: mecanico.php");
				exit();
				break;
		}
	}

	
?> 

<!--?php 
sesion_start();
if( !isset($_SESION["nombre"]) || $_SESION["rol"] != 1 ){
	header("Location: index.php");
	exit;
}
	
	