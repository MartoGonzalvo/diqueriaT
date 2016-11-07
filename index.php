<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Disqueria-T</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	<link  href="bootstrap/js/bootstrap.min.js"  rel="stylesheet" />
	<link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="images/favicon.ico">
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
			
		</div>
		
	 <div id="body">
			<div id="body-inner">
				<div id="body-left">
					
					<h2>Disqueria T </h2>
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
						<img src="images/pic_2.jpg" width="130" height="86" alt="Pic 1" class="left" />
						<ul>
							<li><t1>Rock &amp; roll</t1></li>
							<li>puesto N 1 </li>
							<li>ascenso esta semana +1</li>
						</ul>	
						<div class="btns">
							<a href="#"><span>Votar</span></a>
							<a href="#"><span>Agregar </span></a>
						</div>
						</div>
					
					<div class="box">
						<img src="images/pic_2.jpg" width="130" height="86" alt="Pic 1" class="left" />
						<ul>
							<li><t1>Blues</t1></li>
							<li>puesto N 2 </li>
							<li>descenso esta semana -1</li>
						</ul>	
						<div class="btns">
							<a href="#"><span>Votar</span></a>
							<a href="#"><span>Agregar</span></a>
						</div>
						
					</div>
					<div class="box">
						<img src="images/pic_2.jpg" width="130" height="86" alt="Pic 1" class="left" />
						<ul>
							<li><t1>Reggae</t1></li>
							<li>puesto N 3 </li>
							<li>ascenso esta semana +3</li>
						</ul>	
						<div class="btns">
							<a href="#"><span>Votar</span></a>
							<a href="#"><span>Agregar </span></a>
						</div>
						
					</div>
					<div class="box">
						<img src="images/pic_3.jpg" width="130" height="86" alt="Pic 2" class="left" />
						<ul>
							<li><t1>Soul &amp; rebel</t1></li>
							<li>puesto N 4 </li>
							<li>ascenso esta semana +1</li>
						</ul>	
						<div class="btns">
							<a href="#"><span>Votar</span></a>
							<a href="#"><span>Agregar </span></a>
						</div>
						
					</div>
					<div class="box">
						<img src="images/pic_4.jpg" width="130" height="86" alt="Pic 3" class="left" />
						<ul>
							<li><t1>Ska</t1></li>
							<li>puesto N 5 </li>
							<li>descenso esta semana -1</li>
						</ul>	
						<div class="btns">
							<a href="#"><span>Votar</span></a>
							<a href="#"><span>Agregar</span></a>
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