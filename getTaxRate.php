<?php

require_once 'pdo.php';

$zipcode = $_GET['zip'];

$zipsql = 'SELECT * FROM tax_rates WHERE zip = :zipcode';
$zipstmt = $conn->prepare($zipsql);
$zipstmt->bindParam(':zipcode', $zipcode);
$zipstmt->execute();
$zipinfo = $zipstmt->fetch(PDO::FETCH_ASSOC);


echo $zipinfo['combined_rate'];
$conn=null;

?>
