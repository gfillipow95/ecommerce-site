<?php

require_once 'pdo.php';

$zipcode = $_GET['zip'];

$zipsql = "SELECT * FROM zip_codes INNER JOIN tax_rates ON zip_codes.zip = tax_rates.zip WHERE tax_rates.zip = :zipcode";
$zipstmt = $conn->prepare($zipsql);
$zipstmt->bindParam(':zipcode', $zipcode);
$zipstmt->execute();
$zipinfo = $zipstmt->fetch(PDO::FETCH_ASSOC);

//$total = $zipinfo['combined_rate'] * $GLOBALS['price'];

echo $zipinfo['city'].",".$zipinfo['state'].",".$zipinfo['combined_rate'].",";
$conn=null;

?>
