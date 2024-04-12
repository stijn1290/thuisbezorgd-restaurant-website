<?php
include 'connection.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM users WHERE username= :username AND password = :password";
$stmt= $conn->prepare($sql);
$stmt->bindParam(":username" , $user);
$stmt->bindParam(":password" , $pass);
$result = $stmt->execute();
$data = $stmt->fetch();
if ($result)
{
 session_start();
 $_SESSION['username']= $data['username'];
 $_SESSION['rol']= $data['rol'];
 $_SESSION['controle']= $result;
 header('location:admin.php');
}