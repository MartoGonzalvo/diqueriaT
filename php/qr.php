<?PHP
include '../phpqrcode/qrlib.php';

// El nombre del fichero que se generará (una imagen PNG).
$file = 'listaska.png'; 
// La data que llevará.
$data = '/php/verlista.php'; 


echo $file;
// Y generamos la imagen.
QRcode::png($data, $file);

?>