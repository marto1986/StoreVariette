<?php
	$ci = &get_instance();
	$images = $ci->batasModel->mostrarImg();
?>
<a href="<?php echo base_url()?>batas/nuevoBebes"><button class="nuevo nuevo1 img">Nuevo</button></a>
	<article>
	<?php if(is_array($batas)){ ?>
	<?php if(is_array($images)){ ?>
	<?php foreach($batas as $row){ ?>
	<?php if($row->ninos == 1){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>batas/editar/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<?php $cont = 0; ?>
	        	<?php foreach($images as $fila){ ?>
	        	<?php if($row->id == $fila->id_bata && $cont < 1){ ?>
	                <div class="cuadro"><img width="340px" src="<?php echo base_url()?>img/batas/<?php echo $fila->nombre ?>" alt="<?php echo $row->nombre ?>"></div>
	            	<?php $cont++ ?>
	            <?php } } ?>
	                <div class="descripcion"><?php echo $row->nombre; ?></div>
	                <div class="precio">$ <?php echo $row->precio; ?></div>
	            </div>
        	</a>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        </div>
        <?php } ?>
</article>
</body>
</html>