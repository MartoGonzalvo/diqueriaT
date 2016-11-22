<?php 
    # Cargamos la librería dompdf.
    require_once '../dom/dompdf-master/autoload.inc.php';
    
     
$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>
 
<img src="imagen1.png"></img>
 
</body>
</html>';
 
$name='reporte';
//require_once(__DIR__ . "dom/dompdf-master/autoload.inc.php");
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf;
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
$dompdf->set_option('isHtml5ParserEnabled', true);
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream($name);
?>