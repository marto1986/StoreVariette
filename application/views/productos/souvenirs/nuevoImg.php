<div class="formulario" style="display:none" id="nuevaImg">
	<form id="form" name="form" action="<?php echo base_url() ?>souvenirs/insertImg" method="post" enctype="multipart/form-data">
			<label for="id_souvenirs">Souvenirs</label>
			<select id="id_souvenirs" name="id_souvenirs">
				<option></option>
				<?php if(is_array($souvenirs)){ ?>
					<?php foreach($souvenirs as $row){ ?>
						<option name="<?php echo $row->id ?>" id="<?php echo $row->id ?>"><?php echo $row->id ?> - <?php echo $row->nombre ?></option>
				<?php } } ?>
			</select>
			<br><br>
			<label for="nombre">Imagen</label>
			<input type="file" name="nombre" id="nombre">
			<br><br>
			<input type="submit" id="guardar" value="Guardar" name="submit">
	</form>
	<div id="status" style="display:none"></div>
</div>
<script src="<?php echo base_url()?>lib/img.js"></script>
</body>
</html>