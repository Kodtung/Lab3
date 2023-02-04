<?php
$servername = "localhost";
$username = "cpe1967";
$password = "Degea12345";
$dbname = "cpe1967";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

