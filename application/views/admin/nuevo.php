<div class="formulario">
	<form id="form" name="form" action="<?php echo base_url() ?>pantuflas/insert" method="post" enctype="multipart/form-data">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" required>
			<br><br>
			<label>Descripción</label>
			<textarea rows="8" cols="50" name="descripcion"></textarea>
			<br><br>
			<label for="precio">Precio</label>
			<input type="text" name="precio" id="precio">
			<br><br>
			<label for="foto">Imagen</label>
			<input type="file" name="foto">
			<br><br>
			<label for="articulo">Articulo</label>
			<input type="text" name="articulo" id="articulo">
			<br><br>
			<input type="submit" id="guardar" value="Crear" name="submit">
	</form>
	<div id="status" style="display:none"></div>
</div>
</body>
</html>