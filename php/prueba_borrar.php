 <?php
										  include("conexion.php");
           									 $con=conectar();
										 $query = "SELECT p.nombre, c.artista,c.genero,c.titulo,c.id_cancion,p.foto,c.ubicacion
										 												FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
										 												INNER JOIN cancion as c on con.id_cancion=c.id_cancion
										 												WHERE p.id_playlist = '98' ";
            								$rs = mysqli_query($con,$query);
            						   

								 while ($fila = mysqli_fetch_array($rs)){ ?>
										<?php $nombre = $fila['nombre']?>

																			<?php }
												ECHO $nombre;							
										exit;
?>