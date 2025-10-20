<?php
include('config/db.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
  echo "Contacto guardado correctamente";
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>