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
			<?php
	include("conexion.php");

	$con=conectar();

    include("../jpgraph/jpgraph.php");
    include("../jpgraph/jpgraph_pie.php");
    include("../jpgraph/jpgraph_pie3d.php");
   
    $query = mysqli_query($con,"SELECT * FROM usuario ");
    
   

    $SQLactivo =  "SELECT * FROM usuario WHERE estado = 'activo' ";
	$SQLborrado = "SELECT * FROM usuario WHERE estado = 'borrado' ";
	 
	//ejecutamos la consulta
	$resultA = mysqli_query( $con,$SQLactivo);
	$resultB = mysqli_query( $con, $SQLborrado);
	//obtenemos número filas
	$activos = mysqli_num_rows($resultA);
	$borrados = mysqli_num_rows($resultB); 
	$data = array($borrados,$activos);
    $can=array('USUARIOS BORRADOS','USUARIOS ACTIVOS');   
        
    $graph = new PieGraph(550,300,"auto");
    $graph->img->SetAntiAliasing();
    $graph->SetMarginColor('gray');
//$graph->SetShadow();
 
// Setup margin and titles
    $graph->title->Set("ESTADO DE USUARIOS");
 
    $p1 = new PiePlot3D($data);
    $p1->SetSize(0.45);
    $p1->SetCenter(0.4);
 
// Setup slice labels and move them into the plot
    $p1->value->SetFont(FF_FONT1,FS_BOLD);
    $p1->value->SetColor("black");
    $p1->SetLabelPos(0.5);
 
    $p1->SetLegends($can);
    $p1->ExplodeAll();
 
    $graph->Add($p1);
    $graph->Stroke(); 
  ?>

		 <li id="m2"><button class="btns" onclick = "location='administrador.php'">Volver</button></li></a>
                       
               
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