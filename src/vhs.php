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
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>     -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="js-bootstrap/bootstrap.js"></script> -->
    <!-- <script src="js-bootstrap/bootstrap.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link href="css/estilos.css" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="icons/favicon.png"/>


    <title>VHS</title>
</head>
<body>
    
    <!-- Nav bar -->
		<?php include("includes/nav.php");?>
		<?php include("db.php");?>

    <!-- End Nav bar -->

		<!-- Cover Picture -->
  <div class="fullscreen" id="vhs-cover">
		<div class="container">		
			<div class="row title-vhs">
						<h1> VHS </h1>
						<div class="rectangle3"></div>
			</div>
		</div>
	</div>

	<!--Trending-->
	<div class="vhs-trending" style="background-color: #C25D5C">
		<div class="row trending-title">
			<div class="col-lg-12">
				<h1>TRENDING NOW</h1>
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
<?php
	$resultSet = $db->query('SELECT * FROM vhs ORDER BY nombre ASC')
		or die($db->error);
	while($registro=$resultSet->fetch_array()):
?>
			<div class="col-md-4 col-xs-12">
			<div class="vhs-item">
				<a href="checkout.php?usuario=<?php echo $registro['id'];?>"> <img src="/images/vhs/<?php echo $registro['imagen'];?>" 
				style='width:100%'></a>
				<h4><?php echo $registro['nombre'];?></h4> <h5><?php echo $registro['director'];?></h5>
				<h6><?php echo "$".$registro['precio'];?></h6>
				<button class="modal-btn">details</button><br><br>
			</div>
			</div>
			<div class="bg-modal">
			<div class="modal-content">
			<div class="col-lg-12 col-md-12">
			<span class="close-btn">&times;</span><br>
			<div class=vhs>
					<img src="images/vhs/fotos_vhs2-24.png" style="width:100%">
					<h4>555</h4>
					<h5>Wally Koz</h5>
					<h6>$30.00</h6>
				</div>
				<button id="buy-btn" class="btn"href="checkout.php">buy</button>
			</div>
		</div>
		</div>
<?php
	endwhile;
?>
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

var modal = document.getElementById('modal-content');
var modalBtn = document.getElementById('modal-btn');
var closeBtn = document.getElementById('close-btn');

modalBtn.addEventListener('click', openModal);

function openModal(){
  modal.style.display = 'block';
}

</script>
