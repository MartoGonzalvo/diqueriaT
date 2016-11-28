 <?php
										  include("conexion.php");
           									 $con=conectar();
										 $query = "SELECT p.nombre, c.artista,c.genero,c.titulo,c.id_cancion,p.foto,c.ubicacion
										 												FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
										 												INNER JOIN cancion as c on con.id_cancion=c.id_cancion
										 												WHERE p.id_playlist = '1' ";
            								$rs = mysqli_query($con,$query);
            								$rs2 = mysqli_query($con,$query);
            								 while ($coso = mysqli_fetch_array($rs)){ 
										 $nombre = $coso['nombre'];
										 $foto=$coso['foto'];
														 }

										  
                    					?>
<div id="player">
				<p style="font-size: 12pt; color: red"><?php echo $nombre; ?> </p>
				<img height="50px" 	align="right" vspace="15" hspace="25" src="images/playlist/<?php echo $foto; ?>" >
					
				</img>
		<audio controls="" id="audio" preload="auto" tabindex="0" type="audio/mpeg">

		<source src="" type="audio/mp3">
										        Hola, tu navegador no está actualizado y no puede mostrar este contenido.
										    </audio>
										</div>
										
										<ul id="playlist">

										
										<?php while ($fila = mysqli_fetch_array($rs2)){ ?>
										
										<li class="active"><a href="mp3/<?php  echo $fila['ubicacion']; ?>"><?php echo $fila['titulo']?></a></li>
										
										<?php }?>
										</ul>
										
										<script src="js/java.js"></script>
											<div class="btns">
											<a href="#" onclick="cargar('#cambio', 'php/lista2.php')">Lista Anterior</a>
											<a href="#" onclick="cargar('#cambio', 'php/lista4.php')" >Lista Siguiente</a>
										</div>