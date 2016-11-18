 <?php
            include("conexion.php");
            $con=conectar();
            $query = "SELECT * FROM usuario WHERE estado = 'activo'";
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
                    <?php while ($fila = mysqli_fetch_array($rs)){ 
                    	?>
                   <tbody> 
                      <tr>
                         <td><?php echo $fila['nombre']?></td>
                         <td><?php echo $fila['email']?></td>
                         <td class="error"><?php echo $fila['estado']?></td>
                         <td><a href='borrarUsuario.php?email=<?php echo $fila['email'] ?>'>Borrar</a></td>
                      </tr>								
                      
                       <?php }?>