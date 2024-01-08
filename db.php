<?php
//session_start();
$servername = "localhost";
$username = "user1";
$password = "qwerty13";
$dbname = "datasensor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>