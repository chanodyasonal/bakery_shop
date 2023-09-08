
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
    <title>Hello Desserts</title>
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('img/carousel-1.jpg'); /* Add your image URL here */
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  /* Add a semi-transparent white background with lower opacity */
  background-color: rgba(255, 255, 255, 0.5); /* Adjust the alpha value (0.5 for 50% opacity) */
}

/* Center the form horizontally and vertically */
.centered-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; /* Make the container full height of the viewport */
}

/* Style the login form */
.login-form {
  border: 3px solid #f1f1f1;
  padding: 20px;
  width: 300px; /* Adjust the width as needed */
  text-align: center;
  background-color: white; /* Add a white background color for the form */
  border-radius: 10px; /* Add rounded corners */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Add a shadow for the form */
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 30%; /* Adjust the size here (e.g., 30%) */
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="centered-container">
  <div class="login-form">
    <h2>Login Here</h2>

    <form action="validate.php" method="post">
      <div class="imgcontainer">
        <img src="img/team-1.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit">Login</button>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn" id="cancelButton">Cancel</button>
      </div>
    </form>
  </div>
</div>

<script>
  document.getElementById("cancelButton").addEventListener("click", function() {
    window.location.href = "index.php";
  });
</script>

</body>
</html>
