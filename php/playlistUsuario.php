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
           	 $id=$_SESSION['id_usuario'];
            $query = "SELECT *
						FROM playlist WHERE  crea_id_usuario = '".$id."'";
            $rs = mysqli_query($con,$query);
    		
            ?>
            
           
          
              <table class="table table-bordered">
                   <thead>
                      <tr>
                         <th>Nombre de lista</th>
                        
                         <th>Estado</th>
                         <th>Accion</th>
                         <th>Foto</th>

                      </tr>
                   </thead>
                    <?php while ($fila = mysqli_fetch_array($rs)){ 
                    	?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['nombre']?></td>
                         <td><?php echo $fila['estado']?></td>
                         <td><a href='verLista.php?id_playlist=<?php echo $fila['id_playlist'] ?> & foto=<?php echo $fila['foto']  ?>' >Ver Lista</a></td>
                        <td ><img height="50px" src="../images/playlist/<?php echo $fila['foto']?>" /></td>  


                      </tr>								
                      
                      <?php }?>
                   </tbody>
                         </table>

                       
                     
                    <button class="btns" onclick = "location='usuario.php'">Volver</button>
                    <button class="btns" data-toggle= "modal" data-target="#crea">Crear Lista</button>
					<?php include("../includes/crealista.inc") ?>
		             <button class="btns" data-toggle= "modal" data-target="#cargar">Cargar temas</button></a>
					<?php include("../includes/cargar.inc") ?>
		              		              

                       
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