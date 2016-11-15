<?php
include("../php/conexion.php");
$query = "SELECT * FROM usuario ";
$rs = mysqli_query($con,$query);
?>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>Nombre</th>
         <th>Correo</th>
         <th>Estado</th>
         <th>Acción</th>
      </tr>
   </thead>
   <?php while($row = mysqli_fetch_array($rs))
   {
   ?>
   <tbody>
      <tr>
         <td><?php echo $row['nombre']?></td>
         <td><?php echo $row['mail']?></td>
         <td class="error"><?php echo $row['estado']?></td>
         <td><a href='php/activarUsuario.php?id=<?php echo $row['id_usuario'] ?>'>Activar</a></td>
      </tr>
      <?php
       include("../includes/muestraDeUsuariosTotales.php");
      }
      ?>
   </tbody>
</table>