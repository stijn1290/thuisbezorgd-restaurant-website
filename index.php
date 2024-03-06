<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>register</h2>
    <form action="register.php" method="POST">
        <input type = "text" name="username" placeholder="Voer een user in">
        <input type="password"  name="password" placeholder="Voer een wachtwoord in">
        <input type="submit" value="Register">
    </form>
    <h2>log in</h2>
    <form action="login.php" method="GET">
        <input type = "text" name="username" placeholder="Voer een user in">
        <input type="password"  name="password" placeholder="Voer een wachtwoord in">
        <input type="submit" value="login">
    </form>
</body>
</html>