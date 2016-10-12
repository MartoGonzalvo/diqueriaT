<?php
function conectar(){
$user="root";
$pass="";
$server="localhost";
$db="disqueria";
$con=mysql_connect($server,$user,$pass) or die ("error al concectar".msql_error());
mysql_select_db($db,$con)or die ("error".msql_error());
return $con;
}

?>
