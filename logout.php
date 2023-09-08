<?php
// Start the session
session_start();

// Check if the user is currently logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // User is logged in, so destroy the session to log them out
    session_destroy();

    // Redirect the user to a login page or another appropriate page
    header("location: login.php"); // Replace "login.php" with the URL of your login page
    exit;
} else {
    // If the user is not logged in, redirect them to a login page as well
    header("location: login.php"); // Replace "login.php" with the URL of your login page
    exit;
}
?>
