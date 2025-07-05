<?php
$host = 'localhost';
$user = 'root';
$pass = '';  // leave blank by default in XAMPP
$db = 'ERP';

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
