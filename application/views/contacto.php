<script type="text/javascript">
$(document).ready(function(){
	
	function validar_email(valor)
	{
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		
		if(filter.test(valor))
			return true;
		else
			return false;
	}
	
	$("#enviar").click(function()
	{
		if($("#email").val() == '')
		{
			alert("Ingrese un email");
		}
	});
	
});
</script>
</br></br></br></br>
<div class="container-fluid" id="nuevo">
<center><h2>CONSULTAS / COMPRAS</h2></center>
    <?php 
       if($this->session->flashdata('envio')){?>
       <div style="color:green; font-size:26px"><b><?php echo $this->session->flashdata('envio');?></b></div>
    <?php } ?>
       <form id="form" name="form" action="<?php echo base_url() ?>contacto/insert" method="post">
		<label for="nombre"></br>Nombre y Apellido: </label>
		<input type="text" name="nombre" id="nombre" placeholder="Ingrese aquí su Nombre y Apellido">
		<br><br>
		<label for="email">Correo Electrónico: </label>
		<input type="text" name="email" id="email" placeholder="Ingrese aquí su correo electrónico" >
		<br><br>
		<label>Consulta y/o pedido: </label>
		<textarea rows="8" cols="50" name="consulta" placeholder="Ingrese aquí su consulta y/o pedido"></textarea>
		<br><br>
		<div>
                <span style="color:red; font-weight: bold;">
                Verifique su casilla de correo No Deseado. Al responder su consulta puede estar ahí.
		</span>
		</div>
		<input type="submit" id="enviar" value="Enviar" name="submit">
	</form>
        <div id="status"></div>
      </div>