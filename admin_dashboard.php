<?php
 include 'db_config.php';
if (isset($_POST['add_product'])) {
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $image = "image/" . $_POST['image_url'];

   
    $sql = "INSERT INTO products (product_name, price, image_url) VALUES ('$name', '$price', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('product added!'); window.location='admin_dashboard.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Add Product</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .admin-form { max-width: 500px; margin: 50px auto; padding: 20px; border: 1px solid #ae8585; border-radius: 10px; background: #f0f0f7; }
        .admin-form input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #7e4a4a; border-radius: 5px; }
        .admin-form button { width: 100%; padding: 10px; background: #3961da; color: #fff; border: none; cursor: pointer; }
    </style>
</head>
<body>

<div class="admin-form">
    <h2>add new products</h2>
    <form action="" method="POST">
        <input type="text" name="product_name" placeholder="product name (example:mens suit)" required>
        <input type="number" name="price" placeholder="price (example: 150000)" required>
        <input type="text" name="image_url" placeholder="image name" required>
        <p style="font-size: 12px; color: grey;"></p>
        <button type="submit" name="add_product">add products</button>
    </form>
    <br>
    <a href="index2.php">back to home style</a>
</div>






<hr>
<div style="max-width: 800px; margin: 20px auto; font-family: sans-serif;">
    <h3>list of available products</h3>
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
        <tr style="background-color: #eee;">
            <th style="padding: 10px;">image</th>
            <th style="padding: 10px;">name</th>
            <th style="padding: 10px;">price</th>
            <th style="padding: 10px;">Action</th>
        </tr>

        <?php
        $view_sql = "SELECT * FROM products ORDER BY id DESC";
        $view_result = $conn->query($view_sql);

        if ($view_result->num_rows > 0) {
            while($item = $view_result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='padding: 10px;'><img src='".$item['image_url']."' width='50'></td>";
                echo "<td style='padding: 10px;'>".$item['product_name']."</td>";
                echo "<td style='padding: 10px;'>Tsh ".number_format($item['price'])."</td>";
                echo "<td style='padding: 10px;'><a href='delete_product.php?id=".$item['id']."' style='color: red; text-decoration: none;' onclick='return confirm(\"do you want to delete\")'>delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='padding: 10px; text-align: center;'>no product found.</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>

