<?php
$dsn = "mysql:host=localhost;dbname=car_x_shop";
$dbuser = "root";
$dbpass = "";
$option = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
];
try {
    $conn = new PDO($dsn, $dbuser, $dbpass, $option);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "failed connection" . $e->getMessage();
}
