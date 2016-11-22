<?php 
session_start();

include("conexion.php");
$con=conectar();

$id_cancion=$_GET['id_cancion'];
$id=$_SESSION['id_usuario'];
                   




$query2="SELECT *
FROM playlist 
WHERE crea_id_usuario = '".$id."' GROUP BY id_playlist";
$res=mysqli_query($con,$query2);



while ($fila = mysqli_fetch_array($res)){ 
           $lista= $fila['id_playlist'];
            			}
                    
                    


$query="INSERT INTO contiene VALUES ('".$lista."','".$id_cancion."')";
$rs=mysqli_query($con,$query);



//header("location:listacanciones.php");


 ?>
