<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Disqueria-T</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	<link  href="bootstrap/js/bootstrap.min.js"  rel="stylesheet" />
	<link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="images/favicon.ico">

	<script type="text/javascript" src="js/jquery.min.js"></script>
		<script>
		function cargar(div , desde)
		{
		     $(div).load(desde);
		}
		</script>



 
		
	</head> 
<body>
	<div id="outer" >
		<div id="wrapper" ><div id="header">
			<h1>Disqueria-T</h1>
			<p>Musica On Line Siempre </p>
		</div>
		<div id="nav">
			<div id="head"></div>
			<div id="head-pip"></div>
			<ul>
				<li id="m1"><button class="btn" data-toggle= "modal" data-target="#login">Login</button></li>
				<li id="m2"><button class="btn" data-toggle= "modal" data-target="#registro">Registro</button></li>
					
			</ul>
 	           <?php include("includes/logueo.inc") ?>
 	          <?php include("includes/registro.inc") ?>
			<div id="search">
				<h2>Busca por Genero</h2>
				<form action="php/buscarlista.php" method="POST" name="busca" id="buscarlista">
				
					<input type="text" class="text" name="buscar" value=""  /> <input type="submit" name="submit" value="Go &gt; &gt;" id="submit" class="submit" />
				</form>
				
			</div>
		</div>
		
	 <div id="body">
			<div id="body-inner">
				<div id="body-left">
					<div id="msj"></div>
					<h2 >Disqueria T </h2>
					<p>Aqui encontraras amigos con tus gustos musicales, si no para que hacerte amigo.</p>
					<p> Reggae, Rock, Ska, Soul, Rebel, Pop para divertirse, Dancehall, Blues, Rhythm and blues, Disco, ++</p>
					<ul class="blank">
						<li><a href="#">&gt; &nbsp; Usuarios Destacados</a></li>
						<li><a href="#">&gt; &nbsp; Peores Listas</a></li>
						<li><a href="#">&gt; &nbsp; Lista de Temas</a></li>
						<li><a href="#">&gt; &nbsp; Usuarios por Zona</a></li>
					</ul>
					<p><a href=""> </a>.</p>

				</div>
				<div id="body-right">
					<h2>Top 5 Playlist</h2>
					<div class="box">
						<div class="margin">
							<div id="cambio">
								 <?php
										  include("php/conexion.php");
           									 $con=conectar();
										 $query = "SELECT p.nombre, c.artista,c.genero,c.titulo,c.id_cancion,p.foto,c.ubicacion
										 												FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
										 												INNER JOIN cancion as c on con.id_cancion=c.id_cancion
										 												WHERE p.id_playlist = '107' ";
            								$rs = mysqli_query($con,$query);
            								$rs2 = mysqli_query($con,$query);
            								 while ($coso = mysqli_fetch_array($rs)){ 
										 $nombre = $coso['nombre'];
										 $foto=$coso['foto'];
														 }

										  
                    					?>
										<div id="player">
												<p style="font-size: 12pt; color: red"> <?php echo $nombre; ?> </p>
												<img height="50px" 	align="right" vspace="5" hspace="25" src="images/playlist/<?php echo $foto; ?>" ></img>
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
										<a href="#" onclick="cargar('#cambio', 'php/lista2.php')">Siguiente Lista</a>
										</div>
										</div>
							 </div>

						<div class="btns">

							<a href="#"><span>Votar</span></a>
							<a href="#"><span>Agregar </span></a>
						</div>
						</div>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>

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