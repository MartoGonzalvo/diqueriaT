<?php 
include("conexion.php");
$con=conectar();

$id_playlist=$_GET['id_playlist'];



$query = "DELETE FROM playlist WHERE id_playlist = '".$id_playlist."'";
$rs = mysqli_query($con,$query)or die("error en la consulta");


header("location:administrarListas.php" );


 ?>
 <?//?id_playlist=".urlencode ($id_playlist)