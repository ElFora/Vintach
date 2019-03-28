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
<body class="index">
    
    <!-- Nav bar -->
    <?php include("includes/nav.php");?>
    <!-- End Nav bar -->
    <?php if($_SESSION['vari']=='') 
   {
   ?>
    <!-- Carousel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" id="slide1">
            <img src="images/cover/fotos_cover1.png" class="d-block w-100" alt="first slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>OLD IS NEW</h1>
                <button class="boton" onclick="window.location.href = 'signup.php';">BECOME VINTACHE</button>
                <!-- <button type="button" class="btn btn-primary btn-lg">BECOME VINTACHE</button> -->
              </div>
            </div>
            <div class="carousel-item" id="slide2">
            <img src="images/cover/fotos_cover2.png" class="d-block w-100" alt="second slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>NEW PRODUCT</h1>
                <button class="boton" onclick="window.location.href = 'cassettes.php';">SHOP NOW</button>
              </div>
            </div>
            <div class="carousel-item" id="slide3">
                <img src="images/cover/fotos_cover3.png" class="d-block w-100" alt="third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1>NEW PRODUCT</h1>
                  <button class="boton-2" onclick="window.location.href = 'vhs.php';">SHOP NOW</button>
              </div>
            </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    <!-- End Carousel -->
<?php
   }
?>

<?php if($_SESSION['vari']=='cliente' || 'administrador') 
   {
   ?>
    <!-- Carousel -->
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" id="slide1">
            <img src="images/cover/fotos_cover1.png" class="d-block w-100" alt="first slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>OLD IS NEW</h1>
                <button class="boton" onclick="window.location.href = 'vhs.php';">EXPLORE</button>
                <!-- <button type="button" class="btn btn-primary btn-lg">BECOME VINTACHE</button> -->
              </div>
            </div>
            <div class="carousel-item" id="slide2">
            <img src="images/cover/fotos_cover2.png" class="d-block w-100" alt="second slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>NEW PRODUCT</h1>
                <button class="boton" onclick="window.location.href = 'cassettes.php';">SHOP NOW</button>
              </div>
            </div>
            <div class="carousel-item" id="slide3">
                <img src="images/cover/fotos_cover3.png" class="d-block w-100" alt="third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1>NEW PRODUCT</h1>
                  <button class="boton-2" onclick="window.location.href = 'vhs.php';">SHOP NOW</button>
              </div>
            </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    <!-- End Carousel -->
<?php
   }
?>

</body>
</html>

<script>
$(document).ready(function(){
    $("body").on({
        mouseenter: function(){
            $(this).css("background-color", "#5B4350");
        },  
    });    
});
</script>