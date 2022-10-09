<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Agenda de Contactos</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col">
          <h1>Agenda de Contactos <a href="add.html"><span class="badge badge-primary">nuevo</span></a></h1>
          <div class="table-responsive">
          <table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">DNI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php
include('conexion.php');
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Conexion fallida: " . $conn->connect_error);
 }
 
$sql = "SELECT * FROM contactos order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr><th scope="row">' . $row["id"]. '</th><td>' . $row["txdni"]. '</td><td>' . $row["txnombre"]. '</td><td>' . $row["txcorreo"]. '</td><td>' . $row["txtelefono"]. '</td><td><div class="btn-group" role="group" aria-label="Basic example">
    <a href="fupd.php?id='.$row["id"].'&txdni='.$row["txdni"].'&txnombre='.$row["txnombre"].'&txcorreo='.$row["txcorreo"].'&txtelefono='.$row["txtelefono"].'" class="btn btn-success">edita</a>
    <a href="del.php?id='.$row["id"].'" class="btn btn-danger">borra</a>
  </div></td></tr>';
  }
} else {
  echo "0 contactos";
}
$conn->close();
?> 
 </tbody>
</table>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>