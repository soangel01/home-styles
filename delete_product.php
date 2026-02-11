<?php
include 'db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM products WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "an error occured while deleting: " . $conn->error;
    }
}
?>