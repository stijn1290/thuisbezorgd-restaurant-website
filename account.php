<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="img/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
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