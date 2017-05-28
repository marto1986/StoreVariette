<div class="formulario" id="nuevo">
	<form id="form" name="form" action="<?php echo base_url() ?>pantuflas/insert" method="post" enctype="multipart/form-data">
			<label>Foto Principal</label>
			<input type="file" name="foto" id="foto">
			<label>Ingresa las fotos</label>
			<input type="file" name="foto2" id="foto2">
			<input type="file" name="foto3" id="foto3">
			<input type="file" name="foto4" id="foto4">
			<input type="file" name="foto5" id="foto5">
			<br><br>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" required>
			<label>Descripción</label>
			<textarea rows="8" cols="50" name="descripcion" required></textarea>
			<br><br>
			<label for="precio">Precio</label>
			<input type="text" name="precio" id="precio" required>
			<br><br>
			<label for="articulo">Articulo</label>
			<input type="text" name="articulo" id="articulo" required>
			<br><br>
			<input type="submit" id="guardar" value="Guardar" name="submit">
	</form>
	<div id="status" style="display:none"></div>
</div>
<script src="<?php echo base_url()?>lib/img.js"></script>
</body>
</html>