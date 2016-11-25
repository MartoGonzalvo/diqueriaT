<?php
include("conexion.php");
$con=conectar();
          $query = "SELECT ubicacion FROM usuario WHERE email='".$_SESSION["email"]. "'";
            $rs = mysqli_query($con,$query);
            $fila = mysqli_fetch_array($rs);

?>