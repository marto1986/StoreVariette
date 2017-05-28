<article>
	<?php if(is_array($souvenirs)){ ?>
	<?php foreach($souvenirs as $row){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>productos/viewSouvenirs/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<div class="cuadro">
	        		<?php if(!empty($row->foto)){?>
	        		<img width="340px" src="<?php echo base_url()?>img/souvenirs/<?php echo $row->foto ?>" alt="<?php echo $row->nombre ?>">
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