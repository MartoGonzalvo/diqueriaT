<?php
function conectar(){
$server="localhost";
$user="root";
$pass="";
$db="disqueria";

$con=mysqli_connect($server,$user,$pass,$db) or die ("error al concectar".mysql_error());
return $con;
}
?>
