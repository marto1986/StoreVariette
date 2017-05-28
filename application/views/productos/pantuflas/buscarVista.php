<center><h1>Buscar</h1></center>
<span><a href="/intranet/anuncios">Volver</a></span>
<center><form id="form" name="form" methos="GET" action="/intranet/anuncios/buscar">
	<input type="text" name="query" id="query"/>
	<input type="submit" name="buscar" id="buscar" value="Buscar"/>

	
</form></center>

<br /><br />
<center>
	<div>
		<?php
			if($result != FALSE){
					foreach($result->result() as $row){
						echo $row->anuncios_titulo."<br />";
						echo $row->anuncios_contenido."<br />";
					}
			}
		?>

		<?php if($total != FALSE){ ?>
			<p>Total de Resultados: <?php echo $total; ?></p>
		<?php } ?>
	</div>
</center>