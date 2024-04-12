<?php
include('connection.php');
    $naam = $_POST['naam'];
    $email = $_POST['e-mail'];
    $bericht = $_POST['bericht'];

    $sql = "INSERT INTO contactformulier (bericht, email, naam) VALUES (:bericht, :email, :naam)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':bericht', $bericht);

    if ($stmt->execute()) {
        header('location:index.php');
    } else {
        echo "Error: " . $stmt->errorInfo();
    }