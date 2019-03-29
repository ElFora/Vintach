<?php
include 'db.php';

if(isset($_GET['del'])){
  $director = $_GET['del'];
  $query='DELETE FROM signdata 
          WHERE id = ' . $id;
  $db->query($query) or die ($db->error);
  
  header('location: stock.php');
}
$results = mysqli_query($db, "SELECT * FROM signdata");

?>