<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" />
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Disqueria-T</title>
	<link rel="stylesheet" href="../style.css" type="text/css" charset="utf-8" />
	<link  href="../bootstrap/js/bootstrap.min.js"  rel="stylesheet" />
	<link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../js/jquery.min.js"></script>
	</head>
<body>  
		<?php 
		session_start();
		if( !isset($_SESSION["email"]) || $_SESSION["rol"] != 1 ){
			header("Location: ../index.php");
			exit;
		}
		?>
	<div id="outer" >
		<div id="wrapper" ><div id="header">
			<h1>Disqueria-T</h1>
			<p>bienvenido <?php echo $_SESSION['email'];?> </p>
		</div>
		<div id="fondolista">
			   <li id="m2"><button class="btns" onclick = "location='descargarPdf.php'">Exportar</button></li></a>       
            <?PHP include('torta.php'); ?> 
           <img src="imagen1.png"></img>
           
              
                   
                       
             
               
                </div>

	<!--button class="btns" onclick = "location='graficoCantidadPlaylist.php'">Cantidad de PLaylist</button-->
	<button class="btns" onclick = "location='graficoPlaylist.php'">Ranking de Playlist</button>
	<button class="btns" onclick = "location='graficoVotos.php'">Ranking por votos</button>
	<button class="btns" onclick = "location='graficoUsuarios.php'">Usuarios Borrados</button>
	<button class="btns" onclick = "location='administrador.php'">Volver</button>
	
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