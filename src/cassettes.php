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
<body>
    
    <!-- Nav bar -->
    <?php include("includes/nav.php");?>
    <!-- End Nav bar -->

		<!-- Cover Picture -->
  <div class="fullscreen" id="cassettes-cover">
		<div class="container">		
			<div class="row title-cassettes">
				<div class="col-md-12 col-xs-12">
						<h1> CASSETTES </h1>
						<div class="rectangle3"></div>
				</div>
			</div>
		</div>
	</div>

	<!--Trending-->
	<div class="cassettes-trending" style="background-color: #FFF8EB">
		<div class="row trending-title">
			<div class="col-lg-12">
				<h1>TRENDING NOW</h1>
				<div class="rectangle4"></div>
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
			<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass3.png" style="width:100%">
						<h4>THE CLASH</h4>
						<h5>the clash</h5>
						<h6>$12.50</h6>
						<br>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass4.png" style="width:100%">
						<h4>ANGELO BADALAMENT</h4>
						<h5>twin peaks ost</h5>
						<h6>$20.00</h6>
						<br>
				</div>
			</div>

    	<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass5.png" style="width:100%">
						<h4>DESCENDENTS</h4>
						<h5>liveage!</h5>
						<h6>$9.99</h6>
						<br>
				</div>
			</div>
		</div>
			<!--new row -->
			<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass6.png" style="width:100%">
						<h4>THE KINKS</h4>
						<h5>one for the road</h5>
						<h6>$12.50</h6>
						<br>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass7.png" style="width:100%">
						<h4>THE CURE</h4>
						<h5>...happily ever after</h5>
						<h6>$19.80</h6>
						<br>
				</div>
			</div>

    	<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass8.png" style="width:100%">
						<h4>BLUE VELVET</h4>
						<h5>blue velvet ost</h5>
						<h6>$5.99</h6>
						<br>
				</div>
			</div>
	</div>
		<!--new row -->
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass9.png" style="width:100%">
						<h4>DAVID BOWIE</h4>
						<h5>hunky dory</h5>
						<h6>$11.80</h6>
						<br>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass10.png" style="width:100%">
						<h4>JOHN WILLIAMS</h4>
						<h5>jurassic park ost</h5>
						<h6>$30.80</h6>
						<br>
				</div>
			</div>

    	<div class="col-lg-4 col-sm-12">
				<div class="cassette-item">
						<img src="/images/cassette/fotos_cass11.png" style="width:100%">
						<h4>U2</h4>
						<h5>boy</h5>
						<h6>$3.99</h6>
						<br>
				</div>
			</div>
		</div><br>
		<a class="navbar-brand" href="#">VINTACH</a>
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