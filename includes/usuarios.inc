<body>
 <div class="modal fade" id="usuarios" tabindex="-1" role="dialog" aria-labelledby="MyModelLabel" aria-hidden="true">
          <div class="modal-dialog" >
          <div class="modal-content">
            <div class="modal-header">  
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
              <table class="table table-bordered">
                   <thead>
                      <tr>
                         <th>Nombre</th>
                         <th>Correo</th>
                         <th>Estado</th>
                         <th>Acción</th>
                      </tr>
                   </thead>
                  include 
                   <tbody> 
                      <tr>
                         <td><!--?php echo $row['nombre']?--></td>
                         <td><!--?php echo $row['mail']?--></td>
                         <td class="error"><!--?php echo $row['estado']?--></td>
                         <td><!--a href='php/activarUsuario.php?id=<?php echo $row['id_usuario'] ?>'-->Activar</a></td>
                      </tr>
                      
                   </tbody>
                </table>
          
            </div> 
           
            </div>

          </div>
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="../bootstrap/js/bootstrap.min.js"></script>
        </div>
      </body>