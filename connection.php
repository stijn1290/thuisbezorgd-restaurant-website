<?php
$servername = "localhost";
$username = "root";
$password = "";
$productnaam ="root";
$prijs="";
$omschrijving="";
$afbeelding="";
try {
    $conn = new PDO("mysql:host=$servername;dbname=cafetaria sema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=cafetaria sema", $productnaam, $prijs);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e) {
    echo "Connection failed". $e->getMessage();
}
?>