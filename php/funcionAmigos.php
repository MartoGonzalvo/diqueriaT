<?php



$id_usuario=$_SESSION['id_usuario'];

$query = "SELECT id_usuario_2 FROM relaciona_usuario WHERE id_usuario='".$id_usuario."'||id_usuario_2='".$id_usuario."' " ;
$rs = mysqli_query($con,$query);

while ($array= mysqli_fetch_assoc($rs)) {

	if (in_array($id_usuario, $array)){
     
		echo ("son amigos");
}}
?>
