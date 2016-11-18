<?php
include("conexion.php");
$con=conectar();
session_start();
	 
	$email=$_POST['email'];
	$pass= $_POST['pass'];

	$consulta = mysqli_query( $con, "SELECT * FROM usuario WHERE email = '$email' and contrasena = '$pass' ");
 		
 	
		if(  mysqli_num_rows($consulta) != 1 ){
			echo ("error validacion");
			//header("Location: ../index.php?error=1"); //TODO: revisar
			exit();
		}else{
		
			$fila = mysqli_fetch_assoc($consulta);
			$_SESSION["email"] = $fila['email'] ;
			$_SESSION["rol"] = $fila['tiene_id_perfi'];
			$_SESSION["id_usuario"]=$fila['id_usuario'];
					if($fila["tiene_id_perfi"]=="1"){
						
						header("Location: administrador.php");
					}else{

						header ("Location: usuario.php") ;
												}
			
			
			
				
			
			}
	

	
?> 

	