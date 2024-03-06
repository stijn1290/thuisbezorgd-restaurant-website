<?php


include 'connection.php';

$user = $_GET['username'];
$pass = $_GET['password'];
$sql = "SELECT * FROM users WHERE username='$user' AND password ='$pass'";
$result =$conn->query($sql);
if ($result->rowCount()>0)
{
    echo "welkom";
}
else
{
    echo "ongeldige gebruikersnaam of wachtwoord";
}
