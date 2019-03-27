<?php

  include 'db.php';

  if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $query = "UPDATE usuario
              SET nombre = '$nombre',
              usuario = '$usuario',
              correo = '$correo',
              contrasena = MD5('" . $contrasena . "')
              WHERE id = '$id' ";

    $db->query($query);
    echo 'Los cambios se han guardado';
  }

  if(isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM signdata
              WHERE id = '" . $id . "'";

    $db->query($query);
    echo 'Usuario Eliminado';
  }