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
    margin: 0;
}
a {
    color: #ee6a56;
    text-decoration: underline;
}
.h1 {
    font-size: 21px;
    font-weight: bold;
    margin-bottom: 18px;
}
.h2 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 12px;
}
    /* One column layout */
    .one-column .contents {
    text-align: left;
    }
    .one-column p {
    font-size: 14px;
    margin-bottom: 10px;
    }
    .outer {
    margin: 0 auto;
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
                    <p class='h1'><b><h1>CONSULTA DESDE LA WEB</h1></b></p>
                    <p><b><?php echo $nombre ?></b> se contactó por el formulario de consulta de la web.</p>
                    <p><b>Contactarse al E-mail:</b> <?php echo $email ?></p>
                </td>
            </tr>
            <tr>
                <td class='inner contents'>
                <p><b>Escribió: </b></p>
                <p><?php echo $consulta ?></p>
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