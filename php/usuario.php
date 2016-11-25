<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Disqueria-T</title>
	<link rel="stylesheet" href="../style.css" type="text/css" charset="utf-8" />
	<link  href="../bootstrap/js/bootstrap.min.js"  rel="stylesheet" />
	<link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="../images/favicon.ico">
	</head>
<body> 
		<?php  
		session_start();
		if( !isset($_SESSION["email"]) || $_SESSION["rol"] != 2 ){
			header("Location: ../index.php");
			exit;
		}
		?>
	<div id="outer" >
		<div id="wrapper" ><div id="header">
		<?php	include(consultaUsuario.php); ?>
			<img height="50px" 	align="right" vspace="15" hspace="12" src="../images/perfil/<?php echo $fila?>" ></img>
			<h1>Disqueria-T</h1>
			<p><?php echo $_SESSION['email'];?></p>
		</div>
		<div id="nav">
			<div id="head"></div>
			<div id="head-pip"></div>
			<ul>
				<li id="m1"><button class="btn"onclick = "location='playlistUsuario.php'" >Mi Lista</button></li>
				<li id="m1"><button class="btn"onclick = "location='listacanciones.php'" >Buscar Temas</button></li>
				<li id="m1"><button class="btn"onclick = "location='listarUsuarios.php'" >Otros Usuarios</button></li>
				<li id="m2"><button class="btn" onclick = "location='cierra.php'">Salir</button></li>
					
			</ul>
 	            
			<div id="search">
				<h2>Busca por Genero</h2>
				<form action="buscarlista.php" method="POST" name="busca" id="buscarlista">
				
					<input type="text" class="text" name="buscar" value=""  /> <input type="submit" name="submit" value="Go &gt; &gt;" id="submit" class="submit" />
				</form>
				
			</div>
		</div>
		
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