<!DOCTYPE html>
<html lang="en">
<head>
<title>storevariette</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Storevariette, batas, todas las edades, pantuflas, chinelas, souvenirs"/>
<meta property="og:type" content="website" />
<meta property="og:title" content="Storevariette - Calidad & Calidez">
<meta property="og:url" content="http://www.storevariette.com.ar" />
<meta property="og:description" content="Batas de baño, toallas, souvenirs, chinelas y pantuflas">
<meta property="og:image" content="<?php echo base_url()?>img/1.jpg" />
<meta property="og:site_name" content="Storevariette" />
<meta property="article:publisher" content="https://www.facebook.com/storevariette" />
<meta property="og:image" content="http://www.storevariette.com.ar/img/batas/<?php $foto ?>/>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="Batas de baño para todas las edades, toallas, souvenirs, chinelas y pantuflas para disfrutar" />
<meta name="twitter:title" content="Storevariette" />
<meta name="twitter:site" content="@storevariette" />
<meta name="twitter:creator" content="@storevariette" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="icon" href="<?php echo base_url()?>img/icon.png">
<script src="<?php echo base_url()?>lib/jquery-1.12.3.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>font/css/font-awesome.css">
<script src="<?php echo base_url()?>lib/respond.js"></script>
<script src="<?php echo base_url()?>lib/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url()?>lib/carrousel.js"></script>
<script src="<?php echo base_url()?>lib/respond.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/nav.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/footerForm.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/pop-up.css">
<script type="text/javascript">
function openDialog() {
    $('#overlay').fadeIn('fast', function() {
        $('#popup').css('display','block');
        $('#popup').animate({'left':'30%'},500);
    });
}

function closeDialog(id) {
    $('#'+id).css('position','absolute');
    $('#'+id).animate({'left':'-100%'}, 500, function() {
        $('#'+id).css('position','fixed');
        $('#'+id).css('left','100%');
        $('#overlay').fadeOut('fast');
    });
}
</script>
<style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #fff;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: green !important;
  }
  </style>
</head>