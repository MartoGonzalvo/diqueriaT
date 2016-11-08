<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Disqueria-T</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
	<link  href="bootstrap/js/bootstrap.min.js"  rel="stylesheet" />
	<link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="images/favicon.ico">

	<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
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
						<div class="margin">
										<div id="player">

										<audio controls="" id="audio" preload="auto" tabindex="0" type="audio/mpeg">
										<source src="https://sites.google.com/site/ciudadbloggerfiles/Home/Get%20Lucky.mp3" type="audio/mp3">
										        Hola, tu navegador no está actualizado y no puede mostrar este contenido.
										    </audio>
										</div>
										<ul id="playlist">
										<li class="active"><a href="https://sites.google.com/site/ciudadbloggerfiles/Home/Get%20Lucky.mp3">Get Lucky</a></li>
										<li><a href="https://sites.google.com/site/ciudadbloggerfiles/Home/Creep.mp3">Creep</a></li>
										<li><a href="https://sites.google.com/site/ciudadbloggerfiles/Home/Every%20Breath%20You%20Take.mp3">Every Breath You Take</a></li>
										<li><a href="https://sites.google.com/site/ciudadbloggerfiles/Home/Billie%20Jean.mp3">Billie Jean</a></li>
										<li><a href="https://sites.google.com/site/ciudadbloggerfiles/Home/Have%20You%20Ever%20Seen%20The%20Rain.mp3">Have You Ever Seen The Rain</a></li>
										<li><a href="dw.mp3">Full Moon</a></li>
										</ul>
										<script src="js/java.js"></script>

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