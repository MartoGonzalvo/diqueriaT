<?php
include ("../jpgraph/jpgraph.php");
include ("../jpgraph/jpgraph_line.php");
include("conexion.php");

	$con=conectar();

 $query = mysqli_query($con,"SELECT * FROM playlist ");





// Some data
$ydata = array(11.5,3,8,12,5,1,9,13,5,7);

// Create the graph. These two calls are always required
$graph = new Graph(450,250,"auto");
$graph->SetScale("textlin");
$graph->img->SetAntiAliasing();
$graph->xgrid->Show();

// Create the linear plot
$lineplot=new LinePlot($ydata);
$lineplot->SetColor("black");
$lineplot->SetWeight(2);
$lineplot->SetLegend("Horas");

// Setup margin and titles
$graph->img->SetMargin(40,20,20,40);
$graph->title->Set("Ejemplo: Horas de Trabajo");
$graph->xaxis->title->Set("Días");
$graph->yaxis->title->Set("Horas de Trabajo");
$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#F9BB64@0.5');
//$graph->SetShadow();

// Add the plot to the graph
$graph->Add($lineplot);

// Display the graph
$graph->Stroke();
?> 