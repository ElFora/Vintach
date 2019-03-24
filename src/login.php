<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js-bootstrap/bootstrap.js"></script>
    <script src="js-bootstrap/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <link href="css/custom.scss" rel="stylesheet"> -->
    <link href="css/estilos.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="icons/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="http://index.php/favicon.png"/>


    <title>Vintache</title>
</head>
<body class="signup"> 
    <!-- Nav bar -->
    <?php include("includes/nav.php");?>
    <!-- End Nav bar -->

    <!-- Container -->
<div class="container log-in">
  <!-- tittle -->
  <div class="row tittle-login">
    <div class="col-lg-12">
      <h1>LOG IN</h1>
      <div class="rectangle2"></div>
  </div>
</div>
    <div class="row">
      <div class="col-lg-12">
          <div class="form-thing">
            <form class="log-in-form">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" name="user-mail" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="user-pwd" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-8 col-sm-8 col-xs-4">
                  <button type="button" name="login-btn" class="btn btn-login">login</button>
                </div>
                </div>  
              </div>
            </form>
          </div>  
        </div>
      </div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
    $("body").on({
        mouseenter: function(){
            $(this).css("background-color", "#FCD995");
        },  
    });    
});
</script>