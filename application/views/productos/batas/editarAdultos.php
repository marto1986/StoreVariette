<div class="formulario">
	<form id="form" name="form" action="<?php echo base_url() ?>batas/actualizarBebes/<?php echo $id?>" method="post" enctype="multipart/form-data">
		<label for="nombre">Foto Principal</label>
		<input type="file" name="foto" id="foto">
		<label for="nombre">Ingresa las Fotos</label>
		<input type="file" name="foto2" id="foto2">
		<input type="file" name="foto3" id="foto3">
		<input type="file" name="foto4" id="foto4">
		<input type="file" name="foto5" id="foto5">
		<label for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>"/>
		<br><br>
		<label>Descripción</label>
		<textarea name="descripcion" rows="10" cols="50"><?php echo $descripcion; ?></textarea>
		<br><br>
		<label for="precio">Precio</label>
		<input type="text" name="precio" id="precio" value="<?php echo $precio; ?>">
		<br><br>
		<input type="hidden" class="w3-check" name="bebes" id="bebes" value="">
		<br><br>
		<input type="hidden" class="w3-check" name="ninos" id="ninos" value="">
		<br><br>
		<input type="hidden" class="w3-check" name="adultos" id="adultos" value="1">
		<br><br>
		<input type="hidden" name="foto" id="foto" value="<?php echo $foto; ?>">
		<input type="hidden" name="foto2" id="foto2" value="<?php echo $foto2; ?>">
		<input type="hidden" name="foto3" id="foto3" value="<?php echo $foto3; ?>">
		<input type="hidden" name="foto4" id="foto4" value="<?php echo $foto4; ?>">
		<input type="hidden" name="foto5" id="foto5" value="<?php echo $foto5; ?>">
		<br><br>
		<?php if(!empty($foto)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/batas/<?php echo $foto ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto2)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/batas/<?php echo $foto2 ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto3)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/batas/<?php echo $foto3 ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto4)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/batas/<?php echo $foto4 ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto5)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/batas/<?php echo $foto5 ?>">	
		</div>
		<?php } ?>
		<?php if($foto && $foto2 && $foto3 && $foto4 && $foto5 == ''){?>
		<div class="minuaturas">
			<span>No hay imágenes cargadas</span>	
		</div>
		<?php } ?>
		<div id="error" style="display:none">!Error¡ Debe seleccionar una sola opción</div>
		<input type="submit" value="Guardar" id="guardar" name="submit">
	</form>
	<form id="form" name="form" action="<?php echo base_url() ?>batas/eliminarAdultos/<?php echo $id?>" method="post" enctype="multipart/form-data">
		<input type="submit" class="delete" value="Eliminar" id="guardar" name="submit">
	</form>	
</div>
<script src="<?php echo base_url()?>lib/funciones.js"></script>
</body>
</html>