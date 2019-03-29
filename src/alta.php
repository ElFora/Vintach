<?php

  include 'db.php';

  // ///asignando los campos del formulario a una variable
  // $nombre = "";
  // $direccion = "";
  // $correo = "";
  // $contrasena = "";
  // $contrasena = MD5($contrasena);

  // if(isset($_POST['register-btn'])){
  //   $nombre = $_POST['user-name'];
  //   $direccion =  $_POST['user-address'];
  //   $correo =  $_POST['user-mail'];
  //   $contrasena =  $_POST['user-pwd'];

  //   $query = "INSERT INTO signdata (nombre, adress, email, pswrd, vari)
  //   VALUES ('$nombre','$direccion','$correo','$contrasena', 'cliente')";
  //   mysqli_query($db, $query);
  //   header('location: index.php');
  // }
  
  ///asignando los campos del formulario a una variable
  $nombre = $_POST['user-name'];
  $direccion = $_POST['user-address'];
  $correo = $_POST['user-mail'];
  $contrasena = $_POST['user-pwd'];
  $contrasena = MD5($contrasena);

  ///seleccionar los renglones de la tabla
  $query = "SELECT * FROM signdata WHERE nombre= '$nombre' OR email = '$correo'" ;

  $result = $db->query($query);
  $resultcheck = mysqli_num_rows($result);

  ///Checar que el correo exista o no
  if($resultcheck > 0){
    echo 'Usuario o correo ya existen';
    exit();
  }else{
   $query = "INSERT INTO signdata (nombre, adress, email, pswrd, vari)
             VALUES ('$nombre','$direccion','$correo','$contrasena', 'cliente')";
   $db->query($query);
   header("location: index.php"); 
   echo 'EXITO! USUARIO REGISTRADO';
   exit();
   
  }











