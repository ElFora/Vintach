<?php
session_start();
include('db.php');



$usuario = $_POST['user-mail'];
$contrasena = $_POST['user-pwd'];



$query = "SELECT * FROM signdata WHERE email = '$usuario' AND pswrd = MD5('" . $contrasena . "')";
$result = $db->query($query) or die($bd->error);
/*$resultCheck =  mysqli_num_rows($result);*/

if($result == true) {
    if($registro =  $result->fetch_array()){
        
        $_SESSION['nombre'] = $registro['nombre'];
        $_SESSION['adress'] = $registro['adress'];
        $_SESSION['email'] = $registro['email'];
        $_SESSION['pswrd'] = $registro['pswrd'];
        $_SESSION['vari'] = $registro['vari'];
        $_SESSION['id'] = $registro['id'];
        header("location: index.php"); 
        exit();
        

        }
     else {
        echo 'No existe el usuario';
    }
}
?>