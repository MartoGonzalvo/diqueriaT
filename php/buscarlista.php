<?php 

include("conexion.php");
$con=conectar();

	 
	$busqueda=$_POST['buscar'];
	
	$consulta = mysqli_query( $con,"SELECT DISTINCT p.id_playlist,p.nombre,p.foto,p.genero FROM playlist as p INNER JOIN contiene as con  ON        p.id_playlist= con.id_playlist INNER JOIN cancion as c on con.id_cancion=c.id_cancion 
             WHERE p.nombre LIKE '%".$busqueda."%' || p.genero LIKE '%".$busqueda."%' || p.crea_id_usuario  LIKE '%".$busqueda."%' || c.titulo LIKE '%".$busqueda."%' || c.artista LIKE '%".$busqueda."%'



              "); 
        if (mysqli_num_rows($consulta)!=0 ){
              ?>
 		
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
    
  <div id="outer" >
    <div id="wrapper" ><div id="header">
      <h1>Disqueria-T</h1>
    
    </div>
    <div id="fondolista">
      <table class="table table-bordered">
                   <thead>
                      <tr>
                         <th>Nombre de lista</th>
                        
                         <th>Genero</th>
                         <th>Foto</th>
                         <th>Accion</th>

                      </tr>
                   </thead>
           
                    <?php while ($fila = mysqli_fetch_array($consulta)){ 
                      ?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['nombre']?></td>
                         <td><?php echo $fila['genero']?></td>
                         <td ><img height="50px" src="../images/playlist/<?php echo $fila['foto']?>" /></td>  
                         <td><a href='verLista.php?id_playlist=<?php echo $fila['id_playlist'] ?> & foto=<?php echo $fila['foto']  ?>' ><button>Ver Lista</button></a>
                      </td>

                      </tr>               
                      
                      <?php }?>
                   </tbody>
                         </table>

                       
                     
                    <button class="btns" onclick = "location='usuario.php'">Volver</button>
                    <button class="btns" data-toggle= "modal" data-target="#login">Login</button>
                    <button class="btns" data-toggle= "modal" data-target="#registro">Registro</button>
          
     
             <?php include("../includes/logueo.inc") ?>
            <?php include("../includes/registro.inc") ?>
                                    

                       
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
<?php }else{
echo '<script language="javascript">alert("No se encontraron coincidencias");</script>';
?><meta http-equiv="refresh" content="0; url=usuario.php" /> <?php
}?>
