<?php

include 'connection.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "INSERT INTO Users (username, password) VALUES ('$user', '$pass')";
$conn->exec($sql);