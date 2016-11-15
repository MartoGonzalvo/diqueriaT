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