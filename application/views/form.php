<form id="formulario" action="#" method="post" class="form-horizontal">
	<div class="form-group">
		<label class="control-label col-sm-2" for="nombre">Nombre:</label>
		<div class="col-sm-10">
			<input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre"/>
		</div>
  	</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="apellido">Apellido:</label>
			<div class="col-sm-10">
				<input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido"/>
		</div>
  	</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">E-mail:</label>
			<input name="email" id="email" type="text" class="form-control" placeholder="E-mail"/>
		</div>
  	</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="c_msg">Mensaje:</label>
		<textarea name="Mensaje" id="c_msg" class="form-control" placeholder="Mensaje"></textarea>
		</div>
  	</div>
		<div class="form-group"> 
    		<div class="col-sm-offset-2 col-sm-10">
		<input name="enviar" type="button" value="Enviar" class="btn btn-default" id="enviar"/>
	</div>
  </div>
</form>