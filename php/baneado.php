<?php



$id_usuario2=$_SESSION['id_usuario'];


$query = "SELECT * FROM relaciona_usuario WHERE id_usuario='".$id_usuario2."' & id_usuario_2='".$id_usuario."' " ;
$rs = mysqli_query($con,$query);


if(  mysqli_num_rows($rs) != 1 ){
			
			
     
		
}else{echo ("son amigos");}
?>
