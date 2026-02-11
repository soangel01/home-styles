<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "home_style_db"; // Hakikisha hili jina linafanana na database uliyotengeneza phpMyAdmin

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>