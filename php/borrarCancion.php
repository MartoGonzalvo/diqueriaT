<?php 
include("conexion.php");
$con=conectar();


$id = $_GET['id_cancion'];

$query = "DELETE FROM contiene WHERE id_cancion = '".$id."'";
$rs = mysqli_query($con,$query)or die("error en la consulta");

header("location:verLista.php");


 ?>