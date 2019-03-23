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

    <title>Vintage Store</title>
</head>
<body>
    
    <!-- Nav bar -->

<nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <a class="navbar-brand" href="#">VINTACH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" id="active">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cassettes.php">CASSETTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vhs.php">VHS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">PROFILE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">CHECKOUT</a>
      </li>
    </ul>
    <div class="yellow-font">
    <ul class="navbar-nav" id="credentials">
        <li class="nav-item active">
            <a class="nav-link" href="#">SIGN UP</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">LOGIN</a>
        </li>
    </ul>
    </div>
  </div>
  </nav>
    <!-- End Nav bar -->

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
              </div>
            </div>
            <div class="carousel-item" id="slide2">
            <img src="images/cover/fotos_cover2.png" class="d-block w-100" alt="second slide">
              <div class="carousel-caption d-none d-md-block">
                <h1>NEW PRODUCT</h1>
                <button class="boton" onclick="window.location.href = 'signup.php';">SHOP NOW</button>
              </div>
            </div>
            <div class="carousel-item" id="slide3">
                <img src="images/cover/fotos_cover3.png" class="d-block w-100" alt="third slide">
                <div class="carousel-caption d-none d-md-block">
                  <h1>NEW PRODUCT</h1>
                  <button class="boton-2" onclick="window.location.href = 'signup.php';">SHOP NOW</button>
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


</body>
</html>