<?php

  include 'db.php';

  ///asignando los campos del formulario a una variable
  $nombre = $_POST['nombre'];
  $direccion = $_POST['adress'];
  $correo = $_POST['email'];
  $contrasena = $_POST['pswrd'];
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
   $query = "INSERT INTO signdata (nombre, adress, email, pswrd)
             VALUES ('$nombre','$direccion','$correo','$contrasena')";
   $db->query($query);
   echo 'EXITO! USUARIO REGISTRADO';
   exit();
  }











