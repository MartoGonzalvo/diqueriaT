<?PHP

	//seteo el tamaño maximo permitido por defecto en php.ini, solo para este PHP
    ini_set('upload_max_filesize','100000000000000000000000000000000000000000000M');
	//cambio limite de memoria 
    ini_set('memory_limit','1500000000000000000000000000000000000000000000M'); 
    //cambio tamaño maximo
    ini_set('post_max_size','100000000000000000000000000000000000000000000M');  
    // pongo infinito en el tiempo que tarde en cargarse
	set_time_limit(0);
	
$nombre=$_FILES["file"]["name"];

//-- Si el tipo de archivo es MP3
if((strpos($nombre,".mp3")) || (strpos($tipo,"mpeg"))){
//-- Si el archivo esta siendo subido
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
//-- Si el archivo se logra copiar a la carpeta de audio
if(copy($_FILES['file']['tmp_name'], "/../mp3/ska/".$_FILES["file"]["name"])){
                        //Mostrar mensaje
						echo "Su archivo ha sido subido satisfactoriamente";
					}else{
					// si no es copiado a la carpeta audio
					echo "Lo sentimos su archivo no ha sido almacenado, revise el tamaño del archivo";
					}// fin de la validacion de copia
					
					// si el archivo no es subido, mostrar mensaje
					}else{
					echo "El archivo no se ha subido, revise que sea de formato MP3";
					}// fin del si no es subido
                // si no es mp3
				}else{ 
				echo "El archivo no es del formato mp3";
				echo $tipo;
				}// fin del si es mp3
				
?>