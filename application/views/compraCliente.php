<style>
    body {
    margin: 0;
    padding: 0;
    min-width: 100%;
    background-color: #ffffff;
    }
    table {
    border-spacing: 0;
    font-family: sans-serif;
    color: #333333;
    }
    td {
    padding: 0;
    }
    .full-width-image img {
    width: 100%;
    height: auto;
    }
    img {
    border: 0;
    }
    .wrapper {
    width: 100%;
    table-layout: fixed;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    }
    .webkit {
    max-width: 600px;
    }
    .inner {
    padding: 10px;
}
p {
    Margin: 0;
}
a {
    color: #ee6a56;
    text-decoration: underline;
}
.h1 {
    font-size: 21px;
    font-weight: bold;
    Margin-bottom: 18px;
}
.h2 {
    font-size: 18px;
    font-weight: bold;
    Margin-bottom: 12px;
}
    /* One column layout */
    .one-column .contents {
    text-align: left;
    }
    .one-column p {
    font-size: 14px;
    Margin-bottom: 10px;
    }
    .outer {
    Margin: 0 auto;
    width: 100%;
    max-width: 600px;
    }
   /* Windows Phone Viewport Fix */
   @-ms-viewport { 
    width: device-width; 
   }
</style>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Storevariette</title>
    <!--[if (gte mso 9)|(IE)]>
    <style type='text/css'>
        table {border-collapse: collapse;}
    </style>
    <![endif]-->
</head>
<body>
    <center class='wrapper'>
        <div class='webkit'>
  <table class='outer' align='center'>
    <tr>
        <td class='full-width-image'>
            <img src='http://storevariette.com.ar/img/newllester.png' alt='Storevariette' />
        </td>
    </tr>
  </table>
  <tr>
    <td class='one-column'>
        <table width='100%'>
            <tr>
                <td class='inner contents'>
                    <p class='h1'><b><h1>Detalle de la compra</h1></b></p>
                    <p><b><?php echo $nomape ?></b> GRACIAS POR TU COMPRA</p>
                </td>
            </tr>
            <tr>
                <td class='inner contents'>
                <?php if(is_array($nombre)){
                foreach($nombre as $n){?>
                <p><b>Producto:</b><?php echo $n->nombre ?></p>
                <?php } }else{ ?>
                <p><b>Producto:</b><?php echo $nombre ?></p>
                <?php } ?>
                <?php if(is_array($cantidad)){
                foreach($cantidad as $q){ ?>
                <p><b>Cantidad:</b><?php echo $q->qty ?></p>
                <?php } }else{ ?>
                <p><b>Cantidad:</b><?php echo $cantidad ?></p>
                <?php } ?>
                <?php if(is_array($precio)){
                foreach($precio as $p){ ?>
                <p><b>Precio:</b><?php echo $p->price ?></p>
                <?php } }else{ ?>
                <p><b>Precio:</b><?php echo $precio ?></p>
                <?php } ?>
                <?php if(is_array($detalle1)){
                foreach($detalle1 as $d){ ?>
                <p><b>Detalle:</b><?php echo $d->detalle1 ?></p>
                <?php } }else{ ?>
                <p><b>Detalle:</b><?php echo $detalle1 ?></p>
                <?php } ?>
                <?php if(is_array($detalle2)){
                foreach($detalle2 as $d){ ?>
                <p><b>Detalle:</b><?php echo $d->detalle2 ?></p>
                <?php } }else{ ?>
                <p><b>Detalle:</b><?php echo $detalle2 ?></p>
                <?php } ?>
                <p><b>Total: $<?php echo $total ?></b></p>
                <p><b>Nos estaremos contactando para coordinar la forma de pago y la entrega</p>
                <p>Muchas Gracias</b></p>
                </td>
            </tr>
        </table>
    </td>
   </tr>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
</div>
    </center>
</body>
</html>
<![endif]-->