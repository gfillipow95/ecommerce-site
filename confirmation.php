<?php

require_once 'pdo.php';

$order_id = $_GET['id'];

$ordersql = "SELECT * FROM order_info WHERE order_id = :orderId";
$orderstmt = $conn -> prepare($ordersql);
$orderstmt->bindParam(':orderId', $order_id);
$orderstmt->execute();
$orderInfo = $orderstmt->fetch(PDO::FETCH_ASSOC);

$customersql = "SELECT * FROM customer_info WHERE customer_id = ".$orderInfo['customer_id'];
$customerstmt = $conn->prepare($customersql);
$customerstmt->execute();
$customerInfo = $customerstmt->fetch(PDO::FETCH_ASSOC);


function getShippingMethodName($type){
    if ($type == 0){
        return "Standard Shipping: Expect your order to arrive in 5 - 8 business days";
    }elseif($type == 4){
        return "Express Shipping: Expect your order to arrive in 4 - 5 business days";
    }elseif($type == 10){
        return "2-Day Shipping: Expect your order to arrive in 2 business days";
    }else{
        return "Overnight Shipping: Expect your order to arrive tomorrow";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='stylesheets/productPage.css' />
    <link href="https://fonts.googleapis.com/css?family=Lusitana" rel="stylesheet">
    <title>Order Confirmed</title>
</head>
<body>
    <div class="nav-bar-container">
        <ul class="nav-bar">
            <li><a id="navbar-home" href="index.php#home">Back to Home</a></li>
        </ul>
    </div>

    <h1 style="text-align: center">Your Order for <?php echo $orderInfo['product_name'] ?> has been processed!</h1>

    <div id='order-confirmation'>
        <ul>
            <li><h2>Order Details: </h2></li>
            <li><h3>Product: <?php echo $orderInfo['product_name'] ?></h3></li>
            <li><h3>Amount: <?php echo $orderInfo['quantity'] ?></h3></li>
            <li><h2>Shipping To:</h2></li>
            <li><h3>Name: <?php echo $customerInfo['first_name'] . " " . $customerInfo['last_name']?> </h3></li>
            <li><h3>Address: <?php echo $orderInfo['street_address'] ?></h3></li>
            <li><h3>City: <?php echo $orderInfo['city'] ?></h3></li>
            <li><h3>State: <?php echo $orderInfo['state'] ?></h3></li>
            <li><h3>Zipcode: <?php echo $orderInfo['zipcode'] ?></h3></li>
            <li><h3>Country: <?php echo $orderInfo['country'] ?></h3></li>
            <li><h3>Shipping Method: <?php echo getShippingMethodName($orderInfo['shipping_method']) ?></h3></li>
            <li><h3>Total Cost: $<?php echo $orderInfo['total_cost'] ?></h3></li>
            <li><h2>Thank you for shopping at a Coffee & Stuff!</h2></li>
        </ul>
    </div>
</body>
<?php $conn=null ?>
</html>
