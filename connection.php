<?php
$servername = "localhost";
$username = "root";
$password = "";
$productnaam ="root";
$prijs="";
$omschrijving="";
$afbeelding="";
$naam="root";
$beschrijving="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=cafetaria sema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}