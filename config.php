<?php 
$servername = "localhost";
$username = "bestdfww_zakariaahmed";
$password = "Z27546827z";
$dbname = "bestdfww_uptime";

// forbinde til databasen
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 ?>