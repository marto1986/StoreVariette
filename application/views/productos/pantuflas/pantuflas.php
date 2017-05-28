<article>
	<?php if(is_array($pantufla)){ ?>
	
	<?php foreach($pantufla as $row){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>productos/viewPantuflas/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<div class="cuadro">
	        	<?php if(!empty($row->foto)){?>
	        		<img width="100%" src="<?php echo base_url()?>img/pantuflas/<?php echo $row->foto ?>" alt="<?php echo $row->nombre ?>">
	        	<?php } ?>
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