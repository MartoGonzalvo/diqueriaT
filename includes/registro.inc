 <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="MyModelLabel" aria-hidden="true">
					<div class="modal-dialog" >
					<div class="modal-content">
						<div class="modal-header">	
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
							<form action="php/registrar.php" method="POST" name="adsearch" > 
          							<div class="alert-box success form-feedback"></div>
                 					<div class="register-top-grid">
					                    <label for="nombre">Nombre</label><input name="nombre"  type="text" class="" value="" /></br>
										<label for="apellido">Apellido</label><input name="apellido" id="name" type="text" class="" value="" /></br>
					                    <label for="email">Email</label><input name="email" id="email" type="text" class="" value="" /></br>
										<label for="cont">Contrase&ntilde;a</label><input name="cont"  type="password" class="" value="" /></br>
										<label for="rcont">Repite Contrase&ntilde;a</label><input type="password" name="rcont" id="rcont"  class="" value="" /></br>
								<button name="registrar" id="registrar" class="btn btn-primary">Registrar</button>
									<div id="msj"></div>
							</form>
							
						</div>
						<div calss="modal-footer">
					

							</div>
						</div>

					</div>
						<script src="https://code.jquery.com/jquery.js"> </script>
						<script src="bootstrap/js/bootstrap.min.js"></script>
				</div>
				<div id="msj"></div>
				</div>