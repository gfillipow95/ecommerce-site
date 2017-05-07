<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='stylesheets/productPage.css' />
    <link href="https://fonts.googleapis.com/css?family=Lusitana" rel="stylesheet">
    <title>The Bean Coffee Page</title>
</head>
<body>
    <div class="nav-bar-container">
        <ul class="nav-bar">
            <li><a id="navbar-home" href="#home">Back to Home</a></li>
        </ul>
    </div>

    <div class="product-page-container">
        <div class="product-info-container">
            <?php require_once 'pdo.php';
            $query="SELECT * FROM mug WHERE product_id = :mugId";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':mugId', $mugId);

            $mugId = $_GET['id'];
            $stmt->execute();
            $mugInfo = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "<div class='product-image-container'>";
            echo "<img class='product-page-image' onmousemove='zoomIn()' onmouseout='zoomOut()' src='$mugInfo[pic]'/>";
            echo "</div>";
            echo "<div class='product-description-container'>";
            echo "<h3>$mugInfo[product_name]</h3>";
            echo "<h4>$$mugInfo[price]</h4>";
            echo "</div>";
            $conn=null;
            ?>
        </div>
        <?php include "form.php"; ?>
    </div>
</body>
<script src="javascript/detailedPage.js"></script>
</html>
