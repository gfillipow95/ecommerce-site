<?php
$servername = "sylvester-mccoy-v3.ics.uci.edu";
$dbname = "inf124-db-028";
$username = "inf124-db-028";
$password = "Ze1c.qbyxdo.";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    print "Error!: " . $e->getMessage() . "<br/>";
    $conn = null;
    die();
}
?>