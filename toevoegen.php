<?php
require_once('connection.php');
    $productnaam = $_POST['productnaam'];
    $prijs = $_POST['productprijs'];
    $omschrijving = $_POST['productbeschrijving'];

    $sql = "INSERT INTO eetproducten (productnaam, prijs, omschrijving) VALUES (:productnaam, :prijs, :omschrijving)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':productnaam', $productnaam);
    $stmt->bindParam(':prijs', $prijs);
    $stmt->bindParam(':omschrijving', $omschrijving);

    if ($stmt->execute()) {
        echo "Eten is toegevoegd";
    } else {
        echo "Error: " . $stmt->errorInfo();
    }