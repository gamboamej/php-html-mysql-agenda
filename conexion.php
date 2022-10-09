<?php
$servername = "localhost";
$username = "root";
$password = "root=2021";
$dbname = "db_agenda";

//$username = "pratapo_uagenda";
//$password = "mF-NQ4_*LAfa";
//$dbname = "pratapo_agenda";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
 die("Conexion fallida: " . $conn->connect_error);
}
//echo "Conexion Exitosa";
?> 