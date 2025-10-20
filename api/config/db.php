<?php
$host = "ftpupload.net";
$user = "if0_40207977";
$pass = "tu_contraseña";
$dbname = "if0_40207977_contactos_salle;

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
?>