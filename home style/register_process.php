<?php

include 'backend/db_config.php'; 

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Security check!

    // Angalia kama email ipo
    $check = "SELECT email FROM users WHERE email='$email'";
    $res = $conn->query($check);

    if ($res->num_rows > 0) {
        $message = "<p style='color:red;'>Email tayari imetumika!</p>";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            $message = "<p style='color:green;'>Usajili umekamilika! <a href='login.php'>Login hapa</a></p>";
        }
    }
}
?>