<div class="formulario" id="nuevo">
	<form id="form" name="form" action="<?php echo base_url() ?>batas/insertAdultos" method="post" enctype="multipart/form-data">
		<label for="nombre">Foto Principal</label>
		<input type="file" name="foto" id="foto">
		<label for="nombre">Ingresa las Fotos</label>
		<input type="file" name="foto2" id="foto2">
		<input type="file" name="foto3" id="foto3">
		<input type="file" name="foto4" id="foto4">
		<input type="file" name="foto5" id="foto5">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" required>
		<br><br>
		<label>Descripción</label>
		<textarea rows="8" cols="50" name="descripcion"></textarea>
		<br><br>
		<label for="precio">Precio</label>
		<input type="text" name="precio" id="precio">
		<br><br>
		<input type="hidden" name="bebes" id="bebes" value="">
		<input type="hidden" name="ninos" id="ninos" value="">
		<input type="hidden" name="adultos" id="adultos" value="1">
		<div id="error" style="display:none">!Error¡ Debe seleccionar una sola opción</div>
		<input type="submit" id="guardar" value="Guardar" name="submit">
	</form>
	<div id="status" style="display:none"></div>
	<script src="<?php echo base_url()?>lib/img.js"></script>
	<script src="<?php echo base_url()?>lib/funciones.js"></script>
</div>
</body>
</html>