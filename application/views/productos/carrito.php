</br></br><h1>CARRITO DE COMPRAS</h1>
</br></br></br>
<article class="container-fluid">
	<form action="<?php echo base_url() ?>catalogo/actualizar" method="post" style="text-align: left;">
		<center><table class="table-responsive">
			<tr>
				<th>DETALLE DEL PEDIDO</th>
				<th>PRECIO UNITARIO</th>
				<th>&nbspUNIDADES</th>
                                <th>&nbsp&nbsp&nbspSUBTOTALES</th>
			</tr>
			<?php $i = 1;
			foreach($this->cart->contents() as $item){ ?>
			<input type="hidden" name="<?php echo $i; ?>[rowid]" value="<?php echo $item['rowid']; ?>">
			<tr>
				<td><?php echo $item['name'];

				if($this->cart->has_options($item['rowid']) === TRUE){ ?>
					<p>
					<?php foreach($this->cart->product_options($item['rowid']) as $option_name => $option_value){ ?>
					<b><?php echo $option_name; ?>:</b> <?php echo $option_value; ?><br />
					<?php } ?>
					</p>
					<?php } ?>
					
				</td>
				<td>
					<nobr>&nbsp&nbsp$  <?php echo number_format($item['price']); ?></nobr>&nbsp&nbsp
				</td>
				<td>
					<input type="text" name="<?php echo $i; ?>[qty]" value="<?php echo $item['qty']; ?>" maxlength="5" size="5">
				</td>
				<td>
					&nbsp&nbsp<nobr>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$ <?php echo number_format($item['subtotal']); ?></nobr>&nbsp&nbsp
				</td>
                                <td id="eliminar"><?php anchor('catalogo/eliminarProducto/' . $item['rowid'], 'Eliminar') ?></td>
			</tr>
			<?php $i++; ?>
			<?php } ?>
			<tr>
				<td colspan="2">
					<input type="submit" name="actualizar" value="Actualizar Carrito">
					<?php echo anchor('catalogo/vaciar', 'Vaciar Carrito'); ?>
				</td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTOTAL</td>
				<td>: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$<?php echo number_format($this->cart->total()); ?></td>
			</tr>
		</table></center>
	</form>
        <?php if(number_format($this->cart->total()) != 0){ ?>
	   <a href="<?php echo base_url() ?>catalogo/enviar"><input type="button" value="FINALIZAR PEDIDO"></a>
        <?php } ?>
</article>
<div class="container-fluid">
        <h2>TRES SIMPLES PASOS PARA CONCRETAR TU COMPRA</h2>
        <p>1º) Seleccioná él o los artículos que querés al carrito de compras indicando las opciones del artículo específico (Talle, Color o Número). Luego colocá <b>"FINALIZAR PEDIDO"</b>, el sistema te pedirá que ingreses tu e-mail, nombre y algún teléfono de contacto, luego presioná <b>"CONCRETAR PEDIDO"</b>.</p>
<p>2º) Nos contactaremos lo antes posible para acordar envío. Podés abonar a través de <b>MERCADOPAGO </br><a target="_blank" href="<?php echo base_url()?>promociones">(VER PROMOCIONES VIGENTES)</a> ó TRANSFERENCIA BANCARIA</b></br>.</p>
<p>3º) Podés retirar tu pedido en la sucursal OCA más cercana a tu domicilio, o bien por Haedo (Zona Oeste) coordinando previamente día y hora, también trabajamos con Moto mensajería.</p>
<h3><a target="_blank" href="<?php echo base_url()?>contacto">¡CUALQUIER CONSULTA ADICIONAL NO DUDES EN ESCRIBIRNOS!</a></h3>
</div>
</br></br></br></br></br></br></br></br>