<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" />
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Disqueria-T</title>
	<link rel="stylesheet" href="../style.css" type="text/css" charset="utf-8" />
	<link  href="../bootstrap/js/bootstrap.min.js"  rel="stylesheet" />
	<link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="../images/favicon.ico">

	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script>
		function cargar(div , desde)
		{
		     $(div).load(desde);
		}
		</script>

	</head>
<body>  
		<?php 
		session_start();
		if( !isset($_SESSION["email"]) || $_SESSION["rol"] != 1){
			header("Location: ../index.php");
			
			exit;
		}
		?>
	<div id="outer" >
		<div id="wrapper" ><div id="header">
			
			<h1>Disqueria-T</h1>
			<p>bienvenido <?php echo $_SESSION['email'];?>  Prueba</p>
			
		</div>
		<div id="fondolista">
			 <?php
            include("conexion.php");
            $con=conectar();
           	 $id=$_GET['id_playlist'];
            $query = "SELECT p.nombre, c.artista,c.genero,c.titulo,c.id_cancion
						FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
						INNER JOIN cancion as c on con.id_cancion=c.id_cancion
						WHERE p.id_playlist = '".$id."'";
            $rs = mysqli_query($con,$query);
    
            ?>
            
           
          
              <table class="table table-bordered">
                   <thead>
                      <tr>
                         <th>Titulo</th>
                         <th>Artista</th>
                         <th>Genero</th>
                         
                      </tr>
                   </thead>
                    <?php while ($fila = mysqli_fetch_array($rs)){ 
                    	?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['titulo']?></td>
                         <td><?php echo $fila['artista']?></td>
                         <td><?php echo $fila['genero']?></td>
                         
                         
                      

                      </tr>								
                       
                      	



                      <?php }?>
                   </tbody>
                         </table>

                       <ul>
                       <li id="m2"><button class="btns" onclick = "location='administrarListas.php'">Volver</button></li></a>
                       </ul>
                </div>
                <?php
										  
										 $query = "SELECT p.nombre, c.artista,c.genero,c.titulo,c.id_cancion,p.foto,c.ubicacion
										 												FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
										 												INNER JOIN cancion as c on con.id_cancion=c.id_cancion
										 												WHERE p.id_playlist = '".$id."' ";
            								$rs = mysqli_query($con,$query);
            								$rs2 = mysqli_query($con,$query);
            								 while ($coso = mysqli_fetch_array($rs)){ 
										 $nombre = $coso['nombre'];
										 $foto=$coso['foto'];
														 }

										  
                    					?>
										<div id="player">
												<p style="font-size: 12pt; color: red"> <?php echo $nombre; ?> </p>
												<img height="50px" 	align="right" vspace="5" hspace="25" src="../images/playlist/<?php echo $foto; ?>" ></img>
										<audio controls="" id="audio" preload="auto" tabindex="0" type="audio/mpeg">

										<source src="" type="audio/mp3">
										        Hola, tu navegador no está actualizado y no puede mostrar este contenido.
										    </audio>
										</div>
										<ul id="playlist">
										<?php while ($fila = mysqli_fetch_array($rs2)){ ?>
										
										<li class="active"><a href="../mp3/<?php  echo $fila['ubicacion']; ?>"><?php echo $fila['titulo']?></a></li>
										
										<?php }?>
										
										</ul>
										<script src="../js/java.js"></script>
	 <div id="body">
			<div id="body-inner">
				
				
			<div id="copyright">
				<div id="copyright-left">
					<div><p>Materia: Programacion WEB II</p></div><div class="fclear"></div>
					<div><p>Alumno: Martin Gonzalvo</p></div><div class="fclear"></div>
				</div>
			</div>
			<div class="clear">&nbsp;</div>
		</div>
	</div>
	</div>
		
</body>
</html>