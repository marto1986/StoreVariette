<div class="formulario" id="nuevo">
	<form id="form" name="form" action="<?php echo base_url() ?>chinelas/insert" method="post" enctype="multipart/form-data">
			<label>Foto Principal</label>
			<input type="file" name="foto" id="foto">
			<label>Ingresa las fotos</label>
			<input type="file" name="foto2" id="foto2">
			<input type="file" name="foto3" id="foto3">
			<input type="file" name="foto4" id="foto4">
			<input type="file" name="foto5" id="foto5">
			<br><br>
			
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" required>
			<br><br>
			<label>Descripción</label>
			<textarea rows="8" cols="50" name="descripcion"></textarea>
			<br><br>
			<label for="precio">Precio</label>
			<input type="text" name="precio" id="precio">
			<br><br>
			<input type="submit" id="guardar" value="Crear" name="submit">
	</form>
	<div id="status" style="display:none"></div>
</div>
<script src="<?php echo base_url()?>lib/img.js"></script>
</body>
</html>