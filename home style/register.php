
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Home Styles</title>
    <link rel="stylesheet" href="css/style.css"> </head>
<body>

    <div class="auth-container">
        <form action="register.php" method="POST" class="auth-form">
            <h2>Create Account</h2>
            <?php echo $message; ?> <input type="text" name="username" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="auth-btn">Register</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>

</body>
</html>