<a href="<?php echo base_url()?>souvenirs/nuevo"><button class="nuevo nuevo1"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
	<article>
	<?php if(is_array($souvenirs)){ ?>
	<?php foreach($souvenirs as $row){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>souvenirs/editar/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<div class="cuadro">
	        		<?php if(!empty($row->foto)){?>
	        		<img width="340px" src="<?php echo base_url()?>img/souvenirs/<?php echo $row->foto ?>" alt="<?php echo $row->nombre ?>">
	        	<?php }else{ ?>
	        		<img width="340px" src="<?php echo base_url()?>img/atencion.png">
	        	<?php }?>
	        	</div>
	            <div class="descripcion"><?php echo $row->nombre; ?></div>
	                <div class="precio">$ <?php echo $row->precio; ?></div>
	            </div>
        	</a>
        <?php } ?>
        <?php } ?>
        </div>
</article>
</body>
</html>