<?php 
session_start();

include("conexion.php");
$con=conectar();

$id_cancion=$_GET['id_cancion'];
$id=$_SESSION['id_usuario'];

$query2="SELECT p.id_playlist 
FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
INNER JOIN cancion as c on con.id_cancion=c.id_cancion
WHERE p.crea_id_usuario = '".$id."' GROUP BY p.id_playlist";
$res=mysqli_query($con,$query2);


while ($fila = mysqli_fetch_array($res)){ 
           $lista= $fila['id_playlist'];
            			}
                    
                    


$query="INSERT INTO contiene VALUES ('".$lista."','".$id_cancion."')";
$rs=mysqli_query($con,$query);



header("location:listacanciones.php");


 ?>
