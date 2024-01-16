<?php
include ('server.php') ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <title>Login</title>
</head>
<body> 
    
    
    <div class="login-container" id="login-form">
        <img src="Logo.png" alt="Workout mate">
        <h2>Log in to Workout Mate </h2>
        
        <form action="login.php" method="post">
    <?php include ('errors.php'); ?>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="login_user">Login</button>
        </form>
        
        <p>Don't have an account? <a href="Register.php">Register now</a></p> 
    </div>
 <script>
        
       /* const loginForm = document.getElementById('login-form');
    
        // Add an event listener for form submission
        loginForm.addEventListener('submit', function (event) {
            // Prevent the default form submission
            event.preventDefault();
    
            // Perform your login logic here
    
            // Redirect to the "WorkoutMate.html" page
            window.location.href = 'WorkoutMate.html';
        });
    </script>
    
</body>
</html>
