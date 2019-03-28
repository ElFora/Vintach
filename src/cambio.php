<?php
  session_start();
  include('db.php');
  
  

  /*if(isset($_POST['submit'])) {*/
    $id = $_SESSION['id'];
    $nombre = $_POST['user-name'];
    $direccion = $_POST['user-address'];
    $correo = $_POST['user-mail'];
    
    $query = "UPDATE signdata
              SET nombre = '$nombre',
              adress = '$direccion',
              email = '$correo'
              
              WHERE id = '$id' ";

    $db->query($query);
    header("location: index.php"); 
    echo 'Los cambios se han guardado';
  

  /*if(isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM signdata
              WHERE id = '" . $id . "'";

    $db->query($query);
    echo 'Usuario Eliminado';
  }*/
  ?>