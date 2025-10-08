<?php
$servername = "localhost"; // usually 'localhost' or your DB server IP
$username = "root"; // your DB username
$password = ""; // your DB password
$dbname = "x_streamshoesshop"; // the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

