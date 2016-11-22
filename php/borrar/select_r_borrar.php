 <?php
									
include("../conexion.php");
$con=conectar();
$query='select * from playlist';
$resultado_consulta_mysql=mysqli_query($con,$query);
?>
 <select name="select">
 <?php
 while($lista=mysqli_fetch_assoc($resultado_consulta_mysql))
 echo "<option  value='".$lista["id_playlist"]."'>  ".$lista["nombre"]." </option>"; 
 ?>
	</select>
									



