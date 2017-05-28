<article>
	<?php if(is_array($batas)){ ?>
	<?php foreach($batas as $row){ ?>
	<?php if($row->adultos == 1){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>productos/viewAdultos/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<div class="cuadro">
	        		<?php if(!empty($row->foto)){ ?>
	        			<img width="100%" src="<?php echo base_url()?>img/batas/<?php echo $row->foto ?>" alt="<?php echo $row->nombre ?>">
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
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>