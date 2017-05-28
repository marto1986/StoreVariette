</br</br></br></br>
<div class="container-fluid">
<?php $i = 1;?>
		<form action="<?php echo base_url() ?>catalogo/enviarCompra" method="post">
                <?php foreach($this->cart->contents() as $item){ ?>
		<input type="hidden" name="<?php echo $i; ?>[rowid]" value="<?php echo $item['rowid']; ?>">
                <?php  $nombre = $item['name'];?>
			<?php foreach($this->cart->contents() as $item){ ?>
			<input type="hidden" name="<?php echo $i; ?>[rowid]" value="<?php echo $item['rowid']; ?>">
			<tr>
				<?php

				if($this->cart->has_options($item['rowid']) === TRUE){ ?>
					<p>
					<?php foreach($this->cart->product_options($item['rowid']) as $option_name => $option_value){ ?>
					<input type="hidden" name="detalle1" value="<?php echo $option_name; ?>">
					<input type="hidden" name="detalle2" value="<?php echo $option_value; ?>">
					<?php } ?>
					</p>
					<?php } ?>
					
				</td>
				<td>
					<input type="hidden" name="price" value="<?php echo number_format($item['price']); ?>">
				</td>
				<td>
					<input type="hidden" name="qty" value="<?php echo $item['qty']; ?>" maxlength="5" size="5">
                                        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>" >
				</td>
				<td>
					<input type="hidden" name="subtotal" value="<?php echo number_format($item['subtotal']); ?>">
				</td>
			</tr>
			<?php $i++; ?>
			<?php } } ?>
                        
			<center><h3>INGRESÁ TUS DATOS PARA PODER CONTACTARTE</h3></center>
                        <label>NOMBRE Y APELLIDO</label>
			<input type="text" name="nomape" placeholder="Nombre y Apellido" required>
                        <label>TELEFÓNO</label>
                        <input type="text" name="tel" placeholder="Telefóno o Celular de Contacto" required>
                        <label>CORREO ELECTRÓNICO</label>
                        <input type="text" name="correo" placeholder="Correo Electrónico" required>
			<input type="hidden" name="total" value="<?php echo number_format($this->cart->total()); ?>">
			<input type="submit" name="submit" value="CONCRETAR COMPRA">
		</form>
	        <?php if($this->session->flashdata('envio')){?>
                <div style="color:green; font-size:26px"><b><?php echo $this->session->flashdata('envio');?></b></div>
                <?php } ?>
           </div>
</br</br></br></br></br></br>