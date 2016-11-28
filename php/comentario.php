
<?php
include("conexion.php");
$con=conectar();
session_start();
	 
	$comentario=$_POST['comentario'];
  	$id_usuario=$_GET['id_usuario'];
echo $id_usuario;



  $query = "UPDATE usuario SET comentario = '$comentario' WHERE id_usuario='$id_usuario'";

		$rs = mysqli_query($con, $query);

echo '<script language="javascript">alert("Se ha enviado el comentario");</script>';
?><meta http-equiv="refresh" content="0; url=usuario.php" />
?>