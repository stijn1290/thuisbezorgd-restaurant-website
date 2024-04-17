<?php
include("connection.php");
session_start();
if($_SESSION['controle']){
    $naam = $_POST['naam'];
    $email = $_POST['e-mail'];
    $datum = $_POST['datum'];
    $tijd = $_POST['tijden'];
    $sql= "INSERT INTO `reserveren`(`naam`, `e-mail`, `datum`, `tijdstip`) VALUES (:naam,:email,:datum,:tijd)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':datum', $datum);
    $stmt->bindParam(':tijd', $tijd);
    $result = $stmt->execute();
    if($result)
    {
        header('location:index.php');
    }
    else{
        echo "het reserveren is mislukt";
    }
}
else{
    header('location:account.php');
}