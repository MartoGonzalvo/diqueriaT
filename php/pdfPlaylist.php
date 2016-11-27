<?php 
    # Cargamos la librería dompdf.
    require_once '../dom/dompdf-master/autoload.inc.php';
    
     

			 
			 $sum=1;
            include("conexion.php");
            $con=conectar();
           $query = "SELECT * FROM playlist ORDER BY reproducciones DESC "; 
            $rs = mysqli_query($con,$query);
    		
           
            
            
           //$result=$rs $mysqli->query("SELECT nombre FROM usuarios WHERE id=1");

while ($fila = mysqli_fetch_array($rs)){ 





$html= '<table>'
$html.= "<tr>";
$html.= "<td>";
$html.= $fila['nombre'];
$html.= "</td>";
$html.= "<td>";
$html.= $fila['genero'];
$html.= "</td>";
$html.= "</tr></table>";
          
   }           
use Dompdf\Dompdf;
$mipdf = new Dompdf();

$mipdf ->set_paper("A4", "portrait");
 
$mipdf ->load_html(utf8_decode($html));

$mipdf ->render();

$mipdf ->stream('mipdf.pdf');

$dompdf->stream('mipdf');


 ?>