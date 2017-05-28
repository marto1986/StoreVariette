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
		<label>Datos de la Descripción</label>
		<br><br>
		<label>Título</label>
		<input type="text" name="titulo" id="titulo" value="¡BATAS DE BAÑO PARA NIÑOS CON CAPUCHA!">
		<br><br>
		<label>Sub-Título</label>
		<input type="text" name="subTitulo" id="subTitulo" value="¡DE REGALO UNA TOALLITA DE MANO HACIENDO JUEGO!">
		<br><br>
		<label>Opcional de Bordado</label>
		<input type="text" name="opcional" id="opcional" value="PODES PEDIRLAS PERSONALIZADAS (CON COSTO ADICIONAL)">
		<br><br>
		<label>Descripción</label>
		<input type="text" name="descripcion" id="descripcion" value="Toalla de 420 gramos, muy buena absorción, con mangas 3/4">
		<br><br>
		<label>Condición de Trabajo Personalizado</label>
		<input type="text" name="condicion" id="condicion" value="*** ES REQUISITO INDISPENSABLE EL PAGO ANTICIPADO PARA TODO TRABAJO PERSONALIZADO ***">
		<br><br>
		<label>Colores</label>
		<input type="text" name="colores" id="colores" value="CONSULTAR COLORES DISPONIBLES">
		<br><br>
		<label>Pagos</label>
		<input type="text" name="pagos" id="pagos" value="FORMAS DE PAGO: Efectivo, Mercado Pago, Depósito o Transferencia Bancaria">
		<br><br>
		<label>Envíos</label>
		<input type="text" name="envios" id="envios" value="HACEMOS ENVÍOS A TODO EL PAÍS">
		<br><br>
		<label>Consultas</label>
		<input type="text" name="consultas" id="consultas" value="Cualquier consulta a tu disposición, tu consulta será respondida lo más pronto posible.">
		<br><br>
		<label>E-mail de contacto</label>
		<input type="text" name="email" id="email" value="INFO@STOREVARIETTE.COM.AR">
		<br><br>
		<label>Whatsapp de contacto</label>
		<input type="text" name="whatsapp" id="whatsapp" value="11 - 5930 - 5488">
		<br><br>
		<label for="precio">Precio</label>
		<input type="text" name="precio" id="precio">
		<br><br>
		<input type="hidden" name="bebes" id="bebes" value="">
		<input type="hidden" name="ninos" id="ninos" value="">
		<input type="hidden" name="adultos" id="adultos" value="1">
                <input type="hidden" class="w3-check" name="tabla" id="tabla" value="1">
		<input type="hidden" class="w3-check" name="collage" id="collage" value="1">
		<div id="error" style="display:none">!Error¡ Debe seleccionar una sola opción</div>
		<input type="submit" id="guardar" value="Guardar" name="submit">
	</form>
	<div id="status" style="display:none"></div>
	<script src="<?php echo base_url()?>lib/img.js"></script>
	<script src="<?php echo base_url()?>lib/funciones.js"></script>
</div>
</body>
</html>