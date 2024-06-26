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
    <section class="gebruiker">
        <form action="index.php" class="ingelogd">
            <?php
            session_start();
            echo "<h1>"."Welkom: ".$_SESSION['username']."</h1>";
            ?>
            <input type="submit" value="uitloggen">
        </form>
        <form action="reserverenform.php" class="reserverenblock" method="POST">
            <h1>Wil je een reservering plaatsen</h1>
            <h1>Naam:</h1>
            <input type="text" placeholder="voer u naam in" name="naam">
            <h1>E-mail:</h1>
            <input type="text" placeholder="voer u e-mail in" name="e-mail">
            <div>
                <h1 id="textmargin">Tijd en datum:</h1>
                <input type="date" name="datum">
                <select name="tijden">
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                </select>
            </div>
            <input type="submit" value="reserveren">
        </form>
    </section>
</body>

</html>