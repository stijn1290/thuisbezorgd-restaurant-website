<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>

<body class="background1">
    <header>
        <?php
    include("header.php");
    ?>
    </header>
    <nav class="flexaccount">
        <form action="register.php" method="POST" class="accountblock">
            <h2>Registreer</h2>
            <input type="text" name="username" placeholder="Voer een user in">
            <input type="password" name="password" placeholder="Voer een wachtwoord in">
            <input id="stylingbuttonlogin" type="submit" value="Register">
        </form>
        <form action="loginaccount.php" method="POST" class="accountblock">
            <h2>Inloggen</h2>
            <input type="text" name="username" placeholder="Voer een user in">
            <input type="password" name="password" placeholder="Voer een wachtwoord in">
            <input id="stylingbuttonlogin" type="submit" value="login">
        </form>
    </nav>
</body>

</html>