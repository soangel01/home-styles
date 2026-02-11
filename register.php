 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Products</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
        }
        
        .admin-header {
            background: #333;
            color: white;
            padding: 1rem;
        }
        
        .admin-container {
            display: flex;
        }
        
        .sidebar {
            width: 200px;
            background: #f4f4f4;
            padding: 1rem;
            height: calc(100vh - 60px);
        }
        
        .sidebar…
 <?php

include 'db_config.php'; 

$message = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "<p style='color:green;'>Registration successful! <a href='login.php'>Login here</a></p>";
    } else {
        $message = "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - King's Store</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .form-container { background: white; padding: 40px; border-radius: 12px; box-shadow: 0px 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        input { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 16px; }
        button { width: 100%; padding: 12px; background: #000; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 16px; font-weight: bold; transition: 0.3s; }
        button:hover { background: #333; }
        .footer-text { text-align: center; margin-top: 15px; font-size: 14px; }
        .message { text-align: center; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Create Account</h2>
    
    <div class="message">
        <?php echo $message; ?>
    </div>

    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
    
    <div class="footer-text">
        Already have an account? <a href="login.php" style="color: #000; font-weight: bold;">Login</a>
    </div>
</div>

</body>
</html>