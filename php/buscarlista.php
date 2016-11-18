<?php 

include("conexion.php");
$con=conectar();
session_start();
	 
	$busqueda=$_POST['buscar'];
	
	$consulta = mysqli_query( $con, "SELECT id_playlist FROM playlist WHERE nombre||genero||crea_id_usuario||estado LIKE '".$busqueda."' ");
 		
 	$fila = mysqli_fetch_assoc($consulta);	

 	while ($fila){ 
                    	?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['id_playlist']?></td>
                       
                      </tr>								
                      
                      <?php }?>
                   </tbody>

 		?>