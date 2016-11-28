 <div class="modal fade" id="cargar" tabindex="-1" role="dialog" aria-labelledby="MyModelLabel" aria-hidden="true">
<div class="modal-dialog" >
	<div class="modal-content">
	<div class="modal-header">	
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
	<t2>Subi un tema y completa los datos!!</t2>
	<form action="../includes/cargarTema2.php" method="POST" name="adsearch" id="register" enctype="multipart/form-data"> 
         <div class="alert-box success form-feedback"></div>
          <div class="register-top-grid">
		  
   <label for="artista" class="col-lg-2 control-label">ARTISTA</label><input name="artista"  type="text" required="required" /></br>
   <label for="genero" class="col-lg-2 control-label">GENERO</label><input name="genero"  type="text" required="required"/></br>
   <label for="titulo" class="col-lg-2 control-label">TITULO</label><input name="titulo"  type="text" required="required"/></br>
	




		    <input name="tema" type="file" required="required"/>
						




		  <button name="btn" id="Cargar" class="btns">Cargar</button>
							</form>
							
						</div> 
						<div calss="modal-footer">
					

							</div>
						</div>

					</div>
						<script src="https://code.jquery.com/jquery.js"></script>
						<script src="../bootstrap/js/bootstrap.min.js"></script>
				</div>
				</div>