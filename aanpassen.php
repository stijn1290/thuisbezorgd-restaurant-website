<?php

    include("connection.php");

    $omschrijving= $_POST['omschrijving'];
    $id= $_POST['id'];

    $sql = "UPDATE eetproducten SET omschrijving=:omschrijving WHERE id=:id";
    $stmt= $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':omschrijving', $omschrijving);
    $result =$stmt->execute();
    
    if($result){
        echo"de omschrijving is aangepast";
    }
    else{
        echo "aanpassen is niet gelukt";
    }
