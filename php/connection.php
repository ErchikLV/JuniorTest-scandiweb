<?php

    define('DBHOST', 'localhost');
    define('DBNAME', 'products');
    define('DBPASSWORD', '');
    define('DBUSER', 'root');

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "products";

$conn = new mysqli($hostName, $userName, $password, $databaseName);

// Check connection
    if ($conn->connect_error) {
        "Connection failed: " . $conn->connect_error;
    }

?>

