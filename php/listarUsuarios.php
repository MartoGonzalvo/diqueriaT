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
		if( !isset($_SESSION["email"]) || $_SESSION["rol"] != 2 ){
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
			  <?php
            include("conexion.php");
            $con=conectar();
            $query = "SELECT * FROM usuario WHERE estado = 'activo'";
            $rs = mysqli_query($con,$query);
    
            ?>
            
           
          
              <table class="table table-bordered">
                   <thead>
                      <tr>
                         <th>Usuario</th>
                         <th>Listas</th>
                          <th>Agregar a amigos</th>
                          <th>Ver Lista</th>
                          <th>Foto</th>
                         
                      </tr>
                   </thead>
                    <?php while ($fila = mysqli_fetch_array($rs)){ 
                    	?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['nombre']?></td>
                         <td><?php echo $fila['apellido']?></td>
                         <td><a href='verListaUsuario.php?id_usuario=<?php echo $fila['id_usuario'] ?>'>Ver Listas</a></td>
                         <td><a href='agregarUsuario.php?id_usuario=<?php echo $fila['id_usuario'] ?>'>Agregar</a></td>
                     	 <td ><img height="50px" src="../images/perfil/<?php echo $fila['ubicacion']?>" /></td>  
                      </tr>								
                      
                      <?php }?>
                   </tbody>
                         </table>

                       <ul>
                       <li id="m2"><button class="btns" onclick = "location='usuario.php'">Volver</button></li></a>
                       </ul>
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