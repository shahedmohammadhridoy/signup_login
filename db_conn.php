<?php

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "auth_db";

$dsn = "mysql:host=$sName;dbname=$db_name;charset=UTF8";

try {

    $conn = new PDO($dsn,$uName,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection Failed: ". $e->getMessage();
}