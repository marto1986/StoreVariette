<?php
if($this->session->userdata('user') == FALSE || $this->session->userdata('password') == FALSE)
		{
			redirect(base_url().'login');
		}
?>
<header>
<div class="menu_bar">
      <a href="#" class="bt-menu"><i class="fa fa-bars"></i> STOREVARIETTE</a>
</div>
  <nav>
      <ul>
      
        <li class="submenu">
          <a href="#">BATAS DE BAÑO<i class="fa fa-chevron-down"></i></a>
          <ul class="children">
            <li><a href="<?php echo base_url() ?>batas/bebes">Bebés</a></li>
            <li><a href="<?php echo base_url() ?>batas">Niños</a></li>
            <li><a href="<?php echo base_url() ?>batas/adultos">Adultos</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="#">CALZADO<i class="fa fa-chevron-down"></i></a>
          <ul class="children">
            <li><a href="<?php echo base_url() ?>chinelas">Chinelas</a></li>
            <li><a href="<?php echo base_url()?>pantuflas">Pantuflas</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="#">TOALLAS<i class="fa fa-chevron-down"></i></a>
          <ul class="children">
            <li><a href="<?php echo base_url() ?>toallas">Toallas</a></li>
            <li><a href="<?php echo base_url() ?>toallas/toallon">Toallones</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url() ?>souvenirs">SOUVENIRS</a></li>
        <li><a href="<?php echo base_url()?>admin"><i class="fa fa-home" aria-hidden="true"></i></a></li>
        <li><a href="<?php echo base_url()?>login/logout"><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
        
      </ul>
    </nav>
</header>