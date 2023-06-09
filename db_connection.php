<?php
$host = 'localhost';
$username = 'root';
$password = 'Enya_system';
$database = 'ecommerce_db';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
