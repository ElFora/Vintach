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
    <link rel="shortcut icon" type="image/png" href="src/icons/favicon.png"/>
    <title>Cassettes</title>
</head>
<body>
    
    <!-- Nav bar -->
		<?php include("includes/nav.php");?>
		<?php include("db.php");?>
    <!-- End Nav bar -->

		<!-- Cover Picture -->
  <div class="fullscreen" id="cassettes-cover">
		<div class="container">		
			<div class="row title-cassettes">
						<h1> CASSETTES </h1>
						<div class="rectangle3"></div>
			</div>
		</div>
	</div>

	<!--Trending-->
	<div class="cassettes-trending" style="background-color: #FFF8EB">
		<div class="row trending-title">
			<div class="col-lg-12">
				<h1>TRENDING NOW</h1>
				<br><br>
		</div>
	</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class=cassette>
					<img src="images/cassette/fotos_cass1.png" style="width:100%">
					<h4>NEW ORDER</h4>
					<h5>age of consent</h5>
					<h6>$12.50</h6>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class=cassette>
					<img src="images/cassette/fotos_cass2.png" style="width:100%">
					<h4>DAVID BOWIE</h4>
					<h5>space oddity</h5>
					<h6>$12.50</h6>
				</div>
			</div>
		</div>
	</div>	

	<!--Catalog -->

	<div class="container-fluid cassettes-catalog"> 
		<div class="row">
<?php
	$resultSet = $db->query('SELECT * FROM cassettes ORDER BY nombre ASC')
		or die($db->error);
	while($registro=$resultSet->fetch_array()):
?>
			<div class="col-md-4 col-xs-12">
			<div class="cassette-item">
				<a href="checkout.php?usuario=<?php echo $registro['id'];?>"> <img src="/images/cassette/<?php echo $registro['imagen'];?>" 
				style='width:100%'></a>
				<h4><?php echo $registro['nombre'];?></h4> <h5><?php echo $registro['artistas'];?></h5>
				<h6><?php echo "$".$registro['precio'];?></h6>
				<button class="btn btn-custom" href="checkout.php">buy</button><br><br>
			</div>
			</div>
<?php
	endwhile;
?>
		</div>
		<br>
		<a class="navbar-brand" href="index.php">VINTACH</a>
</div>
</body>
</html>

<script>
$(document).ready(function(){
    $("body").on({
        mouseenter: function(){
            $(this).css("background-color", "#CE7E7D");
        },  
    });    
});