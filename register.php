<?php
// Include config file
require_once "config.php"; // Create a config.php file with your database credentials

// Check if the user is already logged in, redirect to another page if needed
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php"); // Replace with your welcome page
    exit;
}

// Processing form data when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set (no validation)
    if (isset($_POST["email"]) && isset($_POST["psw"])) {
        // Prepare an insert statement
        $sql = "INSERT INTO users (name, username, password) VALUES (?, ?, ?)";
        
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $_POST["name"];
            $param_email = $_POST["email"];
            $param_password = $_POST["psw"]; // Hash the password
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php"); // Replace with your login page
            } else {
                echo "Email Already Exists";
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
}

// Close connection
mysqli_close($link);
?>