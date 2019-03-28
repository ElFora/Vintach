<?php
include('db.php');
$sql = "CREATE TABLE signdata(
  id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  adress VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  pswrd VARCHAR(100) NOT NULL,
  vari VARCHAR (100) NOT NULL
  )";
mysqli_query($db, $sql);

$sql = "CREATE TABLE vhs(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(45) NOT NULL,
  precio float(15) NOT NULL,
  director VARCHAR(1) NOT NULL,
  imagen varchar(50) NOT NULL,
  cantidad int (10),
  vendidos int (10)        
  )";
mysqli_query($db, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('THE BREAKFAST CLUB','15.00','John Hughes','fotos_vhs3.png', '100', '76')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('BLADE RUNNER','20.50','Ridley Scott','fotos_vhs4.png', '70', '20')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('PRETTY WOMAN','7.55','Garry Marshall','fotos_vhs5.png' ,'170', '40')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('BACK TO THE FUTURE','7.80','Robert Zemeckis','fotos_vhs6.png','170', '150')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('JURASSIC PARK','12.50','Steven Spieldberg', 'fotos_vhs7.png', '200', '120')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('A NIGHTMARE ON ELM STREET','12.55','Wes Craven','fotos_vhs8.png', '100', '50')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('JAWS','22.80','Steven Spieldberg','fotos_vhs9.png', '70', '20')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('PRETTY IN PINK','7.80','John Hughes',''fotos_vhs10.png',' '40', '20')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('E.T.','22.80','Steven Spieldberg', 'fotos_vhs11.png', '200', '190')";
mysqli_query($bd, $sql);

$sql = "INSERT INTO vhs (nombre, precio, director, imagen, cantidad, vendidos)
VALUES ('555','30.00','Wally Koz', 'fotos_vhs12.png', '15', '14')";
mysqli_query($bd, $sql);

$sql = "CREATE TABLE cassetes(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(45) NOT NULL,
  precio float(15) NOT NULL,
  artistas VARCHAR(1) NOT NULL,
  imagen varchar(50) NOT NULL,
  cantidad int (10),
  vendidos int (10)        
  )";
mysqli_query($db, $sql);

$sql = "CREATE TABLE addCart(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pid INT(6) FOREIGN KEY,
  nombre VARCHAR(45) NOT NULL,
  precio float(15) NOT NULL,
  cantidad int (10),
  )";
mysqli_query($db, $sql);


?>