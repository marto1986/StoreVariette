<input class="elemento" type="button" value="Toallas" id="registro">
<div class="formulario" id="nuevo">
	<form id="form" name="form" action="<?php echo base_url() ?>toallas/insertToallon" method="post" enctype="multipart/form-data">
			<label>Foto Principal</label>
			<input type="file" name="foto" id="foto">
			<label>Ingresa las fotos</label>
			<input type="file" name="foto2" id="foto2">
			<input type="file" name="foto3" id="foto3">
			<input type="file" name="foto4" id="foto4">
			<input type="file" name="foto5" id="foto5">

			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" required>
			<br><br>
			<label>Descripción</label>
			<textarea rows="8" cols="50" name="descripcion" required></textarea>
			<br><br>
			<label for="precio">Precio</label>
			<input type="text" name="precio" id="precio" required>
			<br><br>
			<input type="hidden" class="w3-check" name="toalla" id="toalla" value="">
			<br><br>
			<input type="hidden" class="w3-check" name="toallon" id="toallon" value="1">
			<br><br>
			<div id="error" style="display:none">!Error¡ Debe seleccionar una sola opción</div>
			<input type="submit" id="guardar" value="Crear" name="submit">
	</form>
	<div id="status" style="display:none"></div>
	<script src="<?php echo base_url()?>lib/img.js"></script>
	<script src="<?php echo base_url()?>lib/funciones.js"></script>
</div>