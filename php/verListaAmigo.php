<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" />
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
		if( !isset($_SESSION["email"]) || $_SESSION["rol"] != 2){
			header("Location: ../index.php");
			$id_mi=$_SESSION['id_usuario'];
			exit;
		}
			
		 include("conexion.php");
            $con=conectar();
           include("funcionAmigos.php");
           	$id_usuario=$_GET['id_usuario'];
            $query = "SELECT p.nombre, p.genero, p.foto
						FROM playlist as p INNER JOIN contiene as con ON p.id_playlist= con.id_playlist
						INNER JOIN cancion as c on con.id_cancion=c.id_cancion
						WHERE p.crea_id_usuario = '".$id_usuario."'GROUP BY p.id_playlist ";
            


		?>
	<div id="outer" >
		<div id="wrapper" ><div id="header">
			<h1>Disqueria-T</h1>
			<p>bienvenido <?php echo $_SESSION['email'];?> </p>
		</div>
		<div id="fondolista">
			           
          
              <table class="table table-bordered">
                   <thead>
                      <tr>
                         <th>Nombe</th>
                         <th>Genero</th>
                         <th>Foto</th>
                         <th>Accion</th>
                      </tr>
                   </thead>
                    <?php while ($fila = mysqli_fetch_array($rs)){ 
                    	?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['nombre']?></td>
                         <td><?php echo $fila['genero']?></td>
                         <td><img height="50px" 	align="right" vspace="5" hspace="25" src="../images/playlist/<?php echo $fila['foto']; ?>" ></img></td>
    <td><a href=''  ><button>Descargar Lista</button></a></td>
                      

                      </tr>								
                       
                      	



                      <?php }?>
                   </tbody>
                         </table>

                       <button class="btns" onclick = "location='listarUsuarios.php'">Volver</button>
                       <button class="btns" onclick = "location='usuario.php'">Volver a usuario</button>
                      
                       
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