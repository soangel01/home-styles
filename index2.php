<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_style</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="navbar">
        <div class="logo">home styles</div>
     <div class="nav-container">
        <nav>
         <ul class="nav-links">
        <li><a href="index2.php">home</a></li>
        <li><a href="admin_dashboard.php">admin</a></li>
        <li><a href="logout.php">logout</a></li>
        </ul> 
        </nav>
        <div>
             <a href="" class="join-btn">login</a>
        </div>   
     </div>
       
         <hr>
    </header>
    <div class="hero-section">
  <img src="image/IMG-20260128-WA0033.jpg" alt="Fashion Model" class="hero-image">
  <div class="hero-content">
    <h1>30-80% Off Sitewide</h1>
    <p>Get the best deals on your favorite styles!</p>
    <a href="#" class="shop-now-btn">SHOP NOW</a>
  </div>
</div>
 
<div style="clear:both; height:50px;"></div>

 <div class="product-grid">
    <?php
    include 'db_config.php';
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Loop inaanza hapa
        while($row = $result->fetch_assoc()) { 
            ?>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="<?php echo $row['image_url']; ?>" alt="Product">
                </div>
                <div class="product-info">
                    <h3><?php echo $row['product_name']; ?></h3>
                    <p class="price">Tsh <?php echo number_format($row['price']); ?></p>
                    <button class="add-to-cart-btn">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>

            <?php 
        } 
    } else {
        echo "<p style='text-align:center; width:100%;'>Hakuna bidhaa dukanani.</p>";
    }
    ?>
</div>
</div>



</div> `
</div>
<footer style="background: #714242; color: #fff; text-align: center; padding: 20px; margin-top: 50px;">
    <p>&copy; 2026 Home Style. Designed by [soangel]</p>
    <p>Contact: +255 750 334 869</p>
</footer>
   
    
</body>
</html>