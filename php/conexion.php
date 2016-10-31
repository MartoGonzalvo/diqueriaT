<?php
function conectar(){
$server="localhost";
$user="root";
$pass="";
$db="disqueria";

$con=mysqli_connect($server,$user,$pass,$db) or die ("error al concectar".mysql_error());
//mysqli_select_db ($con,  $db)or die ("error".mysql_error());
return $con;
}
?>
