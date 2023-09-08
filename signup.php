
<?php

// Initialize the session
session_start();

// Check if the user is already logged in, redirect to another page if needed
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php"); // Redirect to the welcome page or another page
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello Desserts - Hello Dessertsy .</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- . Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* Set the background image for the entire page */
        body {
            background-image: url('img/carousel-1.jpg'); /* Add your image URL here */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 1px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
        }

        form {
            border: none;
        }

        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="register.php" style="border:1px solid #ccc" method="post">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>


            <div class="clearfix">
                <button type="button" class="cancelbtn" onclick="redirectToIndex()">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </form>
    </div>

    <script>
        function redirectToIndex() {
            window.location.href = "index.php";
        }
    </script>
</body>

</html>
