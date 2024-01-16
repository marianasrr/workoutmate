<?php
include ('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Register.css">
    <title>Register Now</title>
</head>
<body>
    <div class="registration-container">
        <img src="Logo.png" alt="Logo">
        <h2>Register Now</h2>
        <form action="register.php" method="post">
    <?php include ('errors.php'); ?>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value=" <?php echo $name; ?>">
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value=" <?php echo $username; ?>" required >
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value=" <?php echo $email; ?>" required>
            
            <label for="password">Password (at least 7 characters):</label>
            <input type="password" id="password" name="password" minlength="7" required>
            
            <button type="submit" name="reg_user">Register</button>

        </form>
    </div>
</body>
</html>
