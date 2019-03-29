<?php
  include('db.php');
  ///asignando los campos del formulario a una variable
  $nombre_vhs = "";
  $precio = "";
  $director = "";
  $imagen = "";
  $cantidad = 0;
  $vendidos = 0;

  if(isset($_POST['save'])){
    $nombre_vhs = $_POST['nombre'];
    $precio =  $_POST['precio'];
    $director =  $_POST['director'];
    $imagen =  $_POST['imagen'];
    $cantidad =  $_POST['cantidad'];
    $vendidos =  $_POST['vendidos'];

    $query = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos) VALUES 
    ('".$nombre_vhs."', '$precio', '".$director."', '$imagen', '$cantidad', '$vendidos')";
    mysqli_query($db, $query);
    header('location: stock.php');

    // $query = "INSERT INTO cassettes (nombre, precio, artistas, imagen, cantidad, vendidos) VALUES 
    // ('$nombre_vhs', '$precio', '$artista', '$imagen', '$cantidad', '$vendidos')";
    // mysqli_query($db, $query);
    // header('location: stock.php');
  }

  if(isset($_GET['del'])){
    $director = $_GET['del'];
    $query='DELETE FROM vhs 
            WHERE id = ' . $director;
    $db->query($query) or die ($db->error);
    
    header('location: stock.php');
  }
  $results = mysqli_query($db, "SELECT * FROM vhs");

  // if(isset($_POST['save'])){
  //   $id = $_POST['id'];
  //   $nombre_vhs = $_POST['nombre'];
  //   $precio =  $_POST['precio'];
  //   $artista =  $_POST['artista'];
  //   $imagen =  $_POST['imagen'];
  //   $cantidad =  $_POST['cantidad'];
  //   $vendidos =  $_POST['vendidos'];

  //   $query = "INSERT INTO cassettes (nombre, precio, artista, imagen, cantidad, vendidos) VALUES 
  //   ('$nombre_vhs', '$precio', '$artista', '$imagen', '$cantidad', '$vendidos')";
  //   mysqli_query($db, $query);
  //   header('location: stock.php');
  // }

//   if(isset($_GET['del'])){
//     $ditector = $_GET['del'];
//     mysqli_query($db, "DELETE FROM vhs WHERE director=$director");
//   }
// $results = mysqli_query($db, "SELECT * FROM vhs");



  ///seleccionar los renglones de la tabla
  // $query = "SELECT * FROM vhs WHERE product_name= '$nombre' OR director_name = '$director'" ;

  // $result = $db->query($query);
  // $resultcheck = mysqli_num_rows($result);

  ///Checar que el correo exista o no
  // if($resultcheck > 0){
  //   echo 'Usuario o correo ya existen';
  //   exit();
  // }else{
  //   $query = "INSERT INTO vhs (nombre, precio, director_name, imagen, cantidad, vendidos)
  //   VALUES ('$nombre','$precio','$director','$imagen', '$cantidad', '$vendidos')";
  //   $db->query($query);
  // }
  //  header("location: stock.php"); 
  //  echo 'EXITO! USUARIO REGISTRADO';
  //  exit();











