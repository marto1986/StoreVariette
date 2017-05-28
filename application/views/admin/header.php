<!DOCTYPE html>
<html>
<head>
<title>storevariette</title>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="icon" href="<?php echo base_url()?>img/icon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bootstrap/css/bootstrap-theme.css">
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>lib/pantuflas.js"></script>
<script src="<?php echo base_url()?>lib/respond.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>lib/sliderPantuflas.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>font/css/font-awesome.css">
<script src="<?php echo base_url()?>lib/jquery-1.12.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/productos/footerForm.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/admin.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/sliderProductos.css">
<link rel="stylesheet" type="text/css" href="http://localhost/storevariette2016/css/productos/productos.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/productos/menuProductos.css">
<script src="<?php echo base_url()?>lib/menu.js"></script>
<script type="text/javascript">
 $(document).ready( function(){	
		var buttons = { previous:$('#lofslidecontent45 .lof-previous') ,
						next:$('#lofslidecontent45 .lof-next') };
						
		$obj = $('#lofslidecontent45').lofJSidernews( { interval : 4000,
												direction		: 'opacity',	
											 	easing			: 'easeOutBounce',
												duration		: 1200,
												auto		 	: true,
												mainWidth:980,
												buttons			: buttons} );	
	});
</script>


</head>