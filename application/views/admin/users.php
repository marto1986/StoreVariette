</br>
<h1>Panel de Administración <i class="fa fa-gift" aria-hidden="true"></i>   STOREVARIETTE</h1>
</br>
<div class="formulario">
<form action="<?php echo base_url() ?>login/ingresar" method="post">
	<label>Usuario</label>
	<input type="text" name="user" id="user" />
	<label>Clave</label>
	<input class="ingresar" type="password" name="password" id="password" />
	<br><br>
	<input type="submit" id="guardar" value="Ingresar" name="login">
</form>
<div><?php echo $this->session->flashdata('Mensaje'); ?>
<?php echo $this->session->keep_flashdata('Mensaje'); ?>
</div>
</div>