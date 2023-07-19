<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO task1 (Direction) VALUES (?)");
$stmt->bind_param("s", $direction);

// Set parameters and execute
$direction = "Right";
$stmt->execute();

echo "Right";

$stmt->close();
$conn->close();
?>
