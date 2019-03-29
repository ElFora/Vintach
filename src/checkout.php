<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="css/estilos.css" rel="stylesheet">

    <title>My Cart</title>
</head>

<nav>
<?php include("includes/nav.php");?>
<?php include("db.php");?>
</nav>

<body class="checkout">    
<div class="container">
<div class="row">
<div class="checkout-title">
<h1>SHOPPING CART</h1>
<div class="rectangle"></div>
</div>    
</div>


<div class="row">
    <div class="col-lg-6">
    <img src="images/vhs/fotos_vhs1.png" alt="NOT FOUND" style="width:100%;">
    </div>
    <div class="col-lg-6">
    <h2>E.T.</h2>
    <h4>steven spielberg</h4>
    <h6 id="precio">$22.80</h6>
    <h6>quantity</h6>
    <div class="quantity">
     <button type="button" class="botones" onclick="addone()">+</button><h6 id="numero">1</h6><button type="button" class="botones" onclick="menosone()"><h6>-</h6></button>
    </div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="eljoshua@live.com">
      <input type="hidden" name="item_name" value="Donation">
      <input type="hidden" name="item_number" value="1">
      <input type="hidden" name="amount" value="9.00">
      <input type="hidden" name="no_shipping" value="0">
      <input type="hidden" name="no_note" value="1">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="lc" value="AU">
      <input type="hidden" name="bn" value="PP-BuyNowBF">
      <input type="image" src="https://www.paypal.com/en_AU/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
      <img alt="" border="0" src="https://www.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
     </form>
    <script type="text/javascript">
    function addone(){
        var foo=document.getElementById('numero').innerHTML;
        foo++;
        document.getElementById('numero').innerHTML = foo;
    }
    
    function menosone(){
        var foo=document.getElementById('numero').innerHTML;
        foo--;
        document.getElementById('numero').innerHTML = foo;
    }
    
    </script>


</div>
</div>
</div>
</body>
</html>