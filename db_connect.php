<?php
$servername = "localhost";
$username = "root"; // Change if your MySQL username is different
$password = ""; // Change if your MySQL password is set
$database = "soulsync_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
