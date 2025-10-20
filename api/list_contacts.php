<?php
include('config/db.php');
$result = $conn->query("SELECT * FROM contactos");
while ($row = $result->fetch_assoc()) {
  echo "<p><strong>{$row['nombre']}</strong> ({$row['email']}): {$row['mensaje']}</p>";
}
$conn->close();
?>