<?php

include 'connection.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "INSERT INTO Users (username, password) VALUES ('$user', '$pass')";
// use exec() because no results are returned
$conn->exec($sql);