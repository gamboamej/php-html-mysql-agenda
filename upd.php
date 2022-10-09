<?php
include('conexion.php');

$id= $_POST["id"];
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

$sql = "UPDATE contactos SET txnombre='$txnombre' , txdni='$txdni', txnombre='$txnombre' , txcorreo='$txcorreo' , txtelefono='$txtelefono' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: updexito.html');
} else {
  header('Location: error.html');
}

$conn->close();
?> 