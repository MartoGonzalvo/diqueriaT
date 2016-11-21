<?php 
session_start();

include("conexion.php");
$con=conectar();
 
                     	
$id_usuario=$_GET['id_usuario'];
$id_usuario2=$_SESSION['id_usuario'];

echo $id_usuario2;
echo $id_usuario;
 					
$query="INSERT INTO relaciona_usuario (id_usuario,id_usuario_2,opinion) VALUES ('".$id_usuario."','".$id_usuario2."','')";
$rs=mysqli_query($con,$query);

header("location:listarUsuarios.php");


 ?>
