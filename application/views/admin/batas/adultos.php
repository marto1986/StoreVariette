<a href="<?php echo base_url()?>batas/nuevoAdultos"><button class="nuevo nuevo1"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
	<article>
	<?php if(is_array($batas)){ ?>
	<?php foreach($batas as $row){ ?>
	<?php if($row->adultos == 1){ ?>
        <div class="cajas">
        	<a href="<?php echo base_url()?>batas/editarAdultos/<?php echo $row->id?>">
	        	<div id="" class="caja">
	        	<div class="cuadro">
	        		<?php if(empty($row->foto)){
	        			echo "Debe cargar una foto principal";
	        			}else{ ?>
	        				<img width="340px" src="<?php echo base_url()?>img/batas/<?php echo $row->foto ?>" alt="<?php echo $row->nombre ?>">
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