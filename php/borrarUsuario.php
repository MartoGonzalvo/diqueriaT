<?php 
include("conexion.php");
$con=conectar();


$email = $_GET['email'];

$query = "UPDATE usuario SET estado = 'borrado' WHERE email = '$email'";
$rs = mysqli_query($con,$query)or die("error en la consulta");

header("location:user.php");


 ?>