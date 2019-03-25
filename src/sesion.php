<?php
include 'db.php';
session_start();


$usuario = $_POST['user-mail'];
$contrasena = $_POST['user-pwd'];

$query = "SELECT * FROM signdata WHERE nombre = '$usuario' AND contrasena = MD5('" . $contrasena . "')";
$result = $db->query($query);
$resultCheck =  mysqli_num_rows($result);

if($resultCheck > 0) {
    if($registro = mysqli_fetch_assoc($result)){
        $_SESSION['id'] = $registro['id'];
        $_SESSION['nombre'] = $registro['nombre'];
        $_SESSION['adress'] = $registro['adress'];
        $_SESSION['email'] = $registro['email'];
        $_SESSION['pswrd'] = $registro['pswrd'];
        
        echo 'Bienvenido ' . $_SESSION['nombre'];

       

        }
    } else {
        echo 'No existe el usuario';
    }

