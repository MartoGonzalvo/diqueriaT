<?php 
include("conexion.php");
$con=conectar();

$id_playlist=$_GET['id_playlist'];
$id = $_GET['id_cancion'];

$consulta="SELECT * FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist	INNER JOIN cancion as c on con.id_cancion=c.id_cancion WHERE p.id_playlist='".$id_playlist."'";


$query = "DELETE FROM contiene WHERE id_cancion = '".$id."'";
$rs = mysqli_query($con,$query)or die("error en la consulta");


header("location:verLista.php?id_playlist=".urlencode ($id_playlist) );


 ?>