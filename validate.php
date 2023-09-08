<?php
// Include config file
require_once "config.php";

// Initialize the session
session_start();

// Check if the user is already logged in, redirect to another page if needed
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php"); // Redirect to the welcome page or another page
    exit;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the email and password are set
    if (isset($_POST["uname"]) && isset($_POST["psw"])) {
        $uname = $_POST["uname"];
        $password = $_POST["psw"];

        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_uname);

            // Set parameters
            $param_uname = $uname;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store the result
                mysqli_stmt_store_result($stmt);

                // Check if the email exists
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind the result variables
                    mysqli_stmt_bind_result($stmt, $id, $uname, $pw_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        // Check if the password matches
                        if ($pw_password == $password) {
                            // Password is correct, start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["uname"] = $uname;

                            // Redirect to the welcome page or another page
                            header("location: index.php"); // Replace with your login page
                        } else {
                            // Password is not valid
                            echo "The password you entered is not valid.";
                        }
                    }
                } else {
                    // Email not found
                    echo "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
}

// Close connection
mysqli_close($link);
?>
