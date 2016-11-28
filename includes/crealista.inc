<div class="modal fade" id="crea" tabindex="-1" role="dialog" aria-labelledby="MyModelLabel" aria-hidden="true">
					<div class="modal-dialog" >
					<div class="modal-content">
						<div class="modal-header">	
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
							<form action="../includes/crearLista.php" method="POST" name="adsearch" enctype="multipart/form-data" > 
          							<div class="alert-box success form-feedback"></div>
                 					<div class="register-top-grid">
					                    <label for="nombre" class="col-lg-2 control-label">Nombre</label><input name="nombre"  type="text" required="required" /></br>
										
					                    <label for="genero" class="col-lg-2 control-label">Genero</label><input name="genero" id="genero"  type="text" required="required" /></br>
										
					                    <label for="genero" class="col-lg-2 control-label">Imagen</label><input name="foto" id="foto"  type="file" required="required" /></br>

										<label for="cont"class="col-lg-2 control-label">Estado</label>
										<select  name="estado">    
											<option value="publico">Publico</option>    
											<option value="privado">Privado</option>    
											<option value="solo yo">Solo yo</option>    
											
											</select><br>
								<button name="registrar" id="registrar" class="btn btn-primary">Crear</button>
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