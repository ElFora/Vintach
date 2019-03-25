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


    <title>VHSs - VINTACH</title>
</head>
<body>
    
    <!-- Nav bar -->
    <?php include("includes/nav.php");?>
    <!-- End Nav bar -->

		<!-- Cover Picture -->
  <div class="fullscreen" id="vhs-cover">
		<div class="container">		
			<div class="row title-vhs">
				<div class="col-md-12 col-xs-12">
						<h1> VHS </h1>
						<div class="rectangle3"></div>
				</div>
			</div>
		</div>
	</div>

	<!--Trending-->
	<div class="vhs-trending" style="background-color: #C25D5C">
		<div class="row trending-title">
			<div class="col-lg-12">
				<h1>TRENDING NOW</h1>
				<div class="rectangle4"></div>
				<br><br>
		</div>
	</div>
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class=vhs>
					<img src="images/vhs/fotos_vhs1.png" style="width:100%">
					<h4>E.T.</h4>
					<h5>Steven Spielberg</h5>
					<h6>$22.80</h6>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
			<div class=vhs>
					<img src="images/vhs/fotos_vhs2-24.png" style="width:100%">
					<h4>555</h4>
					<h5>Wally Koz</h5>
					<h6>$30.00</h6>
				</div>
			</div>
		</div>
	</div>	

	<!--Catalog -->

<div class="container-fluid vhs-catalog"> 
	<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs3.png" style="width:100%">
						<h4>THE BREAKFAST CLUB</h4>
						<h5>john hughes</h5>
						<h6>$15.00</h6>
						<br>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs4.png" style="width:100%">
						<h4>BLADE RUNNER</h4>
						<h5>ridley scott</h5>
						<h6>$20.50</h6>
						<br>
				</div>
			</div>

    	<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs5.png" style="width:100%">
						<h4>PRETTY WOMAN</h4>
						<h5>garry Marshall</h5>
						<h6>$7.55</h6>
						<br>
				</div>
			</div>
		</div>
			<!--new row -->
			<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs6.png" style="width:100%">
						<h4>BACK TO THE FUTURE </h4>
						<h5>robert zemeckis</h5>
						<h6>$7.80</h6>
						<br>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs7.png" style="width:100%">
						<h4>JURASSIC PARK</h4>
						<h5>steven spielberg</h5>
						<h6>$12.50</h6>
						<br>
				</div>
			</div>

    	<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs8.png" style="width:100%">
						<h4>A NIGHTMARE ON ELM STREET</h4>
						<h5>wes craven</h5>
						<h6>$12.55</h6>
						<br>
				</div>
			</div>
	</div>
		<!--new row -->
		<div class="row">
			<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs9.png" style="width:100%">
						<h4>JAWS</h4>
						<h5>steven spielberg</h5>
						<h6>$22.80</h6>
						<br>
				</div>
			</div>

			<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs10.png" style="width:100%">
						<h4>PRETTY IN PINK</h4>
						<h5>john hughes</h5>
						<h6>$7.80</h6>
						<br>
				</div>
			</div>

    	<div class="col-lg-4 col-sm-12">
				<div class="vhs-item">
						<img src="/images/vhs/fotos_vhs11.png" style="width:100%">
						<h4>ALIEN</h4>
						<h5>ridley scott</h5>
						<h6>$12.99</h6>
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