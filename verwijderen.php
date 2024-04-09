<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("connection.php");
    $id = $_POST['id'];
    $sql = "DELETE FROM `eetproducten` WHERE id =:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    if ($result) {
        echo "Succesvol verwijderd";
    } else {
        echo "Er is een fout opgetreden";
    }
}

