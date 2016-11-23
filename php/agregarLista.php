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



            			
                    
		   $consulta="SELECT c.id_cancion FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist	INNER JOIN cancion as c on con.id_cancion=c.id_cancion WHERE p.id_playlist='".$id_playlist."'";
				$res=mysqli_query($con,$consulta);
				$fila = mysqli_fetch_assoc($res);

				//$resultado = count($a);

				if(count($fila)==1 && in_array($id_cancion, $fila)){

				
				    echo "Existe en la lista";
				}else{              


				$query="INSERT INTO contiene VALUES ('".$id_playlist."','".$id_cancion."')";
				$rs=mysqli_query($con,$query);
					}
		

    header("location:verLista.php?id_playlist=".urlencode ($id_playlist) );


 ?>
