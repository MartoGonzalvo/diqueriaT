<?php 
include("connect.php");

$usuario = $_GET['id'];

$query = " UPDATE usuario SET estado = 'activo' WHERE id_usuario = '".$usuario."'";
$rs = mysqli_query($cnx,$query)or die("error en la consulta");

header("location:../panel");


 ?>