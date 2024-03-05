<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=cafetaria sema", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT username, password FROM users");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row)
    echo '<h1>' . $row["username"] . '</h1>';
    echo '<h1>' . $row["password"] . '</h1>';
?>
</body>
