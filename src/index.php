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
	<link href="css/estilos.css" rel="stylesheet">

    <title>Vintage Store</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Nav bar -->

<nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <a class="navbar-brand" href="#">VINTACH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" id="active">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">MUSIC</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FILM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ELECTRONICS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DECOR</a>
      </li>
    </ul>
    <ul class="navbar-nav" id="credentials">
        <li class="nav-item active">
            <a class="nav-link" href="#">SIGN UP</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">LOGIN</a>
        </li>
    </ul>
  </div>
  </nav>
    <!-- End Nav bar -->

    <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" id="slide1">
            <img src="images/cover.jpg" class="d-block w-100" alt="first slide">
            </div>
            <div class="carousel-item" id="slide2">
            <img src="images/cover2.jpg" class="d-block w-100" alt="second slide">
            </div>
            <div class="carousel-item" id="slide3">
            <img src="images/cover3.jpg" class="d-block w-100" alt="third slide">
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
    <!-- End Carousel -->

</body>
</html>