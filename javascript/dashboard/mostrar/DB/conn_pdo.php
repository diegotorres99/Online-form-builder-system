<?php
$servername = "mysql-26513-0.cloudclusters.net:26513";
$username = "diego";
$password = "ASPW-12345";

try {
    $conn = new PDO("mysql:host=$servername;dbname=globals_formularios_master", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully.";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>