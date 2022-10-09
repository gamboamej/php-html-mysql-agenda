<?php
include('conexion.php');

$txnombre = $_POST["txnombre"];
$txdni = $_POST["txdni"];
$txcorreo = $_POST["txcorreo"];
$txtelefono = $_POST["txtelefono"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Conexion fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO contactos (txnombre, txdni, txcorreo, txtelefono)
VALUES ('$txnombre','$txdni','$txcorreo','$txtelefono')";

if ($conn->query($sql) === TRUE) {
header('Location: addexito.html');
die();
} else {
header('Location: error.html');
}

$conn->close();
?> 