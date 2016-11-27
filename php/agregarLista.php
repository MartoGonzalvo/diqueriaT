<?php 
session_start();

include("conexion.php");
$con=conectar();

$id_cancion=$_GET['id_cancion'];
//$id=$_SESSION['id_usuario'];
$id_playlist=$_GET['id_playlist'];                 
/*$query2="SELECT *
FROM playlist 
WHERE crea_id_usuario = '".$id."' ";
$res=mysqli_query($con,$query2);*/ 

            			
                       


				$query="INSERT INTO contiene VALUES ('".$id_playlist."','".$id_cancion."')";
				$rs=mysqli_query($con,$query);
			
		

    header("location:verLista.php?id_playlist=".urlencode ($id_playlist));


 ?>
