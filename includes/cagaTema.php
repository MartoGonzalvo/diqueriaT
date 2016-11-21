<?php

$name_file = $_FILES['userfile']['name']; //nombre del archivo
$type_file = $_FILES['userfile']['type']; //tipo de archivo
$size_file = $_FILES['userfile']['size']; //size in bytes
ini_set('upload_max_filesize','10M'); //seteo el tamaño maximo permitido por defecto en php.ini, solo para este PHP
ini_set('memory_limit','1500M');//cambio limite de memoria
ini_set('post_max_size','100M');cambio tamaño maximo
set_time_limit(0);// pongo infinito en el tiempo que tarde en cargarse
if($size_file > 6000000)  {
    header("Location: error.php?err=This files is too heavy"); //aca lo mando si es muy grande...
}
$file = "directorios/miarchivo.mp3"; //mi archivo mp3
move_uploaded_file($_FILES['new_audio']['tmp_name'], $file); //subis el archivo
chmod($file, 0777); //habilitas todos los permisos del archivo  



?>