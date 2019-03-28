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

    <title>Users</title>
</head>
<body class="signup"> 
    <!-- Nav bar -->
    <?php include("includes/nav.php");?>
    <!-- End Nav bar -->

    <!-- Container -->
    <br><br><br><br>
<div class="container users">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">MAIL</th>
      <th scope="col">ADDRESS</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <?php
  $conn = mysqli_connect("db", "root", "root", "main");
  if($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
  }

  $sql = "SELECT id, nombre, adress, email from signdata";
  $result = $conn-> query($sql);

  if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()) {
      echo "<tr><td>" . $row["id"] ."</td><td>". $row["nombre"] . "</td><td>" . $row["adress"] ."</td><td>".  $row["email"] . "</td><td>"; 
      ?><button onclick="return confirm('Are you sure you want to delete this?')" lass="btn btn-users" href="delete.php">delete</button> <?php
      ;
    }
    echo "</table>";
  } 
  else{
    echo "0 result";
  }
  $conn-> close();
?>
     
  
</table>
</div>
    <!-- Container -->


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