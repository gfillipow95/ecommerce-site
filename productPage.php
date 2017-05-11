<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='stylesheets/productPage.css' />
    <link href="https://fonts.googleapis.com/css?family=Lusitana" rel="stylesheet">
    <?php require_once 'pdo.php';
    $query="SELECT * FROM products WHERE id = :typeId AND product_id = :productId";
    $stmt = $conn->prepare($query);

    $stmt->execute(array(
        ':typeId' => $_GET['id'],
        ':productId' => $_GET['type']
    ));
    $productInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <title><?php echo $productInfo[product_name] ?></title>
</head>
<body>
    <div class="nav-bar-container">
        <ul class="nav-bar">
            <li><a id="navbar-home" href="index.php#home">Back to Home</a></li>
        </ul>
    </div>

    <div class="product-page-container">
        <div class="product-info-container">
            <?php

            echo "<div class='product-image-container'>";
            echo "<img class='product-page-image' onmousemove='zoomIn()' onmouseout='zoomOut()' src='$productInfo[pic]'/>";
            echo "</div>";
            echo "<div class='product-description-container'>";
            echo "<h3>$productInfo[description]</h3>";
            echo "<h3>$productInfo[product_name]</h3>";
            echo "<h4 id='price' data-price='$productInfo[price]'>$$productInfo[price]</h4>";
            echo "</div>";
            ?>
        </div>
        <?php include "form.php"; ?>
    </div>
<?php $conn=null; ?>
</body>
<script src="javascript/detailedPage.js"></script>
<script src="javascript/orderForm.js"></script>
</html>
