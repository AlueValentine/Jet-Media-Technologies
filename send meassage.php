<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live_chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sender = "user"; // You can modify this to differentiate between user and admin
$message = $_POST['message'];

$sql = "INSERT INTO messages (sender, message) VALUES ('$sender', '$message')";

if ($conn->query($sql) {
  echo "Message sent successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>