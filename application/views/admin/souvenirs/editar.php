<div class="formulario">
	<form id="form" name="form" action="<?php echo base_url() ?>souvenirs/actualizar/<?php echo $id?>" method="post" enctype="multipart/form-data">
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
		<label>Datos de la Descripción</label>
		<br><br>
		<label>Título</label>
		<input type="text" name="titulo" id="titulo" value="<?php echo $titulo ?>">
		<br><br>
		<label>Sub-Título</label>
		<input type="text" name="subTitulo" id="subTitulo" value="<?php echo $subTitulo ?>">
		<br><br>
		<label>Opcional de Bordado</label>
		<input type="text" name="opcional" id="opcional" value="<?php echo $opcional ?>">
		<br><br>
		<label>Descripción</label>
		<input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion ?>">
		<br><br>
		<label>Condición de Trabajo Personalizado</label>
		<textarea rows="10" cols="150" name="condicion" id="condicion"><?php echo $condicion ?></textarea>
		<br><br>
		<label>Colores</label>
		<input type="text" name="colores" id="colores" value="<?php echo $colores ?>">
		<br><br>
		<label>Pagos</label>
		<input type="text" name="pagos" id="pagos" value="<?php echo $pagos ?>">
		<br><br>
		<label>Envíos</label>
		<input type="text" name="envios" id="envios" value="<?php echo $envios ?>">
		<br><br>
		<label>Consultas</label>
		<input type="text" name="consultas" id="consultas" value="<?php echo $consultas ?>">
		<br><br>
		<label>E-mail de contacto</label>
		<input type="text" name="email" id="email" value="<?php echo $email ?>">
		<br><br>
		<label>Whatsapp de contacto</label>
		<input type="text" name="whatsapp" id="whatsapp" value="<?php echo $whatsapp ?>">
		<br><br>
                <label for="precio">Precio</label>
		<input type="text" name="precio" id="precio" value="<?php echo $precio; ?>">
		<br><br>
		<input type="hidden" class="w3-check" name="foto" value="<?php echo $foto ?>">
		<input type="hidden" class="w3-check" name="foto2" value="<?php echo $foto2 ?>">
		<input type="hidden" class="w3-check" name="foto3" value="<?php echo $foto3 ?>">
		<input type="hidden" class="w3-check" name="foto4" value="<?php echo $foto4 ?>">
		<input type="hidden" class="w3-check" name="foto5" value="<?php echo $foto5 ?>">
		<?php if(!empty($foto)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/souvenirs/<?php echo $foto ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto2)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/souvenirs/<?php echo $foto2 ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto3)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/souvenirs/<?php echo $foto3 ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto4)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/souvenirs/<?php echo $foto4 ?>">	
		</div>
		<?php } ?>
		<?php if(!empty($foto5)){ ?>
		<div class="minuaturas">
			<img src="<?php echo base_url()?>img/souvenirs/<?php echo $foto5 ?>">	
		</div>
		<?php } ?>
		<?php if($foto && $foto2 && $foto3 && $foto4 && $foto5 == ''){?>
		<div class="minuaturas">
			<span>No hay imágenes cargadas</span>	
		</div>
		<?php } ?>
		<input type="submit" value="Guardar" id="guardar" name="submit">
	</form>
	<form id="form" name="form" action="<?php echo base_url() ?>souvenirs/eliminar/<?php echo $id?>" method="post" enctype="multipart/form-data">
		<input type="submit" class="delete" value="Eliminar" id="guardar" name="submit">
	</form>
</div>	
</body>
</html>