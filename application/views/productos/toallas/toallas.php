<article>
	<?php if(is_array($toallas)){ ?>
	<?php foreach($toallas as $row){ ?>
	<?php if($row->toalla == 1){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>productos/viewToallas/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<div class="cuadro">
	                <?php if(!empty($row->foto)){?>
	        		<img width="340px" src="<?php echo base_url()?>img/toallas/<?php echo $row->foto ?>" alt="<?php echo $row->nombre ?>">
	        	<?php } ?>
	        	</div>
	            	<div class="descripcion"><?php echo $row->nombre; ?></div>
	                <div class="precio">$ <?php echo $row->precio; ?></div>
	            </div>
        	</a>
        <?php } ?>
        <?php } ?>
        <?php } ?>
        </div>
</article>
</body>
</html>