<div>
	<?php if(is_array($images)){ ?>
	<?php foreach($images as $row){ ?>
		<?php if($id == $row->id_souvenirs){ ?>
		<div class="minuaturas">
			<span class="delete"><a href="<?php echo base_url()?>souvenirs/eliminarImg/<?php echo $row->id?>"><i class="fa fa-trash" aria-hidden="true"></i></a></span>
			<img width="250px" src="<?php echo base_url()?>img/souvenirs/<?php echo $row->nombre?>">
		</div>
	<?php } } }?>
</div>
</body>
</html>