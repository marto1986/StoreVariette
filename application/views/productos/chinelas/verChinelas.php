<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>lib/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url() ?>lib/script.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('.slider2').bxSlider({
    slideWidth: 400,
    auto: true,
    minSlides: 2,
    maxSlides: 2,
    moveSlides: 1,
    slideMargin: 10
  });
});
</script>

</br></br></br></br></br></br>
<div class="slider2">
  <?php if(!empty($foto)){ ?>
  <div class="slide"><img width="350" src="<?php echo base_url() ?>img/chinelas/<?php echo $foto ?>"></div>
  <?php } ?>
  <?php if(!empty($foto2)){ ?>
  <div class="slide"><img width="350" src="<?php echo base_url() ?>img/chinelas/<?php echo $foto2 ?>"></div>
  <?php } ?>
  <?php if(!empty($foto3)){ ?>
  <div class="slide"><img width="350" src="<?php echo base_url() ?>img/chinelas/<?php echo $foto3 ?>"></div>
  <?php } ?>
  <?php if(!empty($foto4)){ ?>
  <div class="slide"><img width="350" src="<?php echo base_url() ?>img/chinelas/<?php echo $foto4 ?>"></div>
  <?php } ?>
  <?php if(!empty($foto5)){ ?>
  <div class="slide"><img width="350" src="<?php echo base_url() ?>img/chinelas/<?php echo $foto5 ?>"></div>
  <?php } ?>
</div>


<div class="container-fluid" style="width:400px;">
  <h1 class="titleProducto"><?php echo $nombre ?></h1>
  <h2 class="precioCarro">$ <?php echo $precio ?>,00</h2>
  <div class="cuotas"><i class="fa fa-credit-card" aria-hidden="true"></i> ¡Hasta 12 Cuotas Sin Interés! </div>
  <div class="condiciones"><a href="<?php echo base_url()?>promociones" target="blank">Ver Condiciones</a></div>
  <div class="envios"><i class="fa fa-truck" aria-hidden="true"></i> Envíos a todo el país</div>
  <form method="post" action="<?php echo base_url()?>catalogo/agregar">
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
  <input type="hidden" name="precio" value="<?php echo $precio ?>">
  </br>
  <select name="opciones[TALLE]" id="opciones['talle']">
    <option value="">Talle</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>  
    <option value="40">40</option>
</select>
</br>
  <a id="min" class="min" style="cursor:pointer;"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
  <input name="cantidad" id="quantity" value="1" size="4" />
  <a id="plus" class="plus" style="cursor:pointer;"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
  </br></br>
  <input type="submit" name="submit" value="Agregar Carrito">
  </form>
</div>
</div>


</br></br></br></br>
<div class="container-fluid" style="width:80%; text-align:center">
  <?php if(!empty($titulo)){ ?>
     <div class="viweTitulo">
      <span><?php echo $titulo ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($subTitulo)){ ?>
    <div class="viewsubTitulo1">
      <span><?php echo $subTitulo ?></span>
     </div>
  <?php } ?>
  <?php if(!empty($opcional)){ ?>
    <div class="opcional">
      <span><?php echo $opcional ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($descripcion)){ ?>
    <div class="viewdescripcion">
      <span><?php echo $descripcion ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($collage)){ ?>
    <div>
      <img width="100%" class="img-thumbnail" src="<?php echo base_url() ?>img/collage/collage-chinela.jpg">
    </div>
  <?php } ?>
  <?php if(!empty($condicion)){ ?>
    <div class="condicion">
      <span><?php echo $condicion ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($colores)){ ?>
    <div class="colores">
      <span><?php echo $colores ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($pagos)){ ?>
    <div class="pagos">
      <span><?php echo $pagos ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($envios)){ ?>
    <div class="envios">
      <span><?php echo $envios ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($consultas)){ ?>
    <div class="viewConsultas">
      <span><?php echo $consultas ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($email)){ ?>
    <div class="contactoEmail">
      <i class="fa fa-envelope" aria-hidden="true"></i> <span><?php echo $email ?></span>
    </div>
  <?php } ?>
  <?php if(!empty($whatsapp)){ ?>
    <div class="contactoWhatsapp">
      <i class="fa fa-whatsapp" aria-hidden="true"></i> <span><?php echo $whatsapp ?></span>
    </div>
  <?php } ?>
  </div>
</br></br></br></br>


<script type="text/javascript">
    $(document).ready(function(){
        $('#min').click(function(){
          if ($('#quantity').val() != 0)
            $('#quantity').val(parseInt($('#quantity').val()) - 1);
        });
        
        $('#plus').click(function(){
          $('#quantity').val(parseInt($('#quantity').val()) + 1);
        });
    });
</script>