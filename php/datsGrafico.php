<?php
// Conectamos base de datos
include("conexion.php");
include ("../jpgraph/jpgraph.php"); 
			include ("../jpgraph/jpgraph_pie.php"); 
			include ("../jpgraph/jpgraph_pie3d.php"); 
$con=conectar();

 
//preparamos la consulta
$SQLactivo =  "SELECT * FROM usuario WHERE estado = 'activo' ";
$SQLborrado = "SELECT * FROM usuario WHERE estado = 'borrado' ";
 
//ejecutamos la consulta
$resultA = mysqli_query( $con,$SQLactivo);
$resultB = mysqli_query( $con, $SQLborrado);
//obtenemos número filas
$activos= mysqli_num_rows($resultA);
$borrados = mysqli_num_rows($resultB); 
$data = array($borrados,$activos);

//cargamos array con los nombres de las métricas a visualizar

echo $numFilasB;
echo $numFilasA;
mysqli_close($con);

?>
