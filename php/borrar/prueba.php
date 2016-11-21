<?php
	include("conexion.php");

	$con=conectar();

    include("../jpgraph/jpgraph.php");
    include("../jpgraph/jpgraph_pie.php");
    include("../jpgraph/jpgraph_pie3d.php");
   
    $query = mysqli_query($con,"SELECT * FROM usuario ORDER BY 'estado' ");
    
    while($row = mysqli_fetch_array($query))
    {
     $data[] = $row[7];
     $can[] = $row[5];

    } 
        
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