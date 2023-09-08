<?php
// Database configuration
$databaseHost = "localhost"; // Change to your MySQL server host (usually "localhost")
$databaseUsername = "root"; // Change to your MySQL username
$databasePassword = ""; // Change to your MySQL password
$databaseName = "desserts"; // Change to your MySQL database name

// Attempt to connect to the database
$link = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check the connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
