<?php
include('conexion.php');

$id = $_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM contactos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: delexito.html');
} else {
  header('Location: error.html');
}

$conn->close();
?> 